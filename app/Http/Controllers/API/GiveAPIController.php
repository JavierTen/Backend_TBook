<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\Give;
use App\Repositories\CartRepository;
use App\Repositories\BookRepository;
use App\Repositories\NotificationRepository;
use App\Repositories\GiveRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\UserRepository;
use Braintree\Gateway;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Exceptions\RepositoryException;
use Prettus\Validator\Exceptions\ValidatorException;
use Stripe\Token;

/**
 * Class GiveController
 * @package App\Http\Controllers\API
 */
class GiveAPIController extends Controller
{
    /** @var  GiveRepository */
    private $GiveRepository;
    /** @var  BookRepository */
    private $BookRepository;
    /** @var  CartRepository */
    private $cartRepository;
    /** @var  UserRepository */
    private $userRepository;
    /** @var  PaymentRepository */
    private $paymentRepository;
    /** @var  NotificationRepository */
    private $notificationRepository;

    public function __construct(GiveRepository $GiveRepo, BookRepository $BookRepository, PaymentRepository $paymentRepo, NotificationRepository $notificationRepo, UserRepository $userRepository)
    {
        $this->GiveRepository = $GiveRepo;
        $this->BookRepository = $BookRepository;
        $this->userRepository = $userRepository;
        $this->paymentRepository = $paymentRepo;
        $this->notificationRepository = $notificationRepo;
    }

    /**
     * Display a listing of the Give.
     * GET|HEAD /Gives
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        Log::error("get Gives");
        try {
            $this->GiveRepository->pushCriteria(new RequestCriteria($request));
            $this->GiveRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }
        $Gives = $this->GiveRepository->all();

        return $this->sendResponse($Gives->toArray(), 'Gives retrieved successfully');
    }

    /**
     * Display the specified Give.
     * GET|HEAD /Gives/{id}
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id)
    {
        /** @var Give $Give */
        if (!empty($this->GiveRepository)) {
            try {
                $this->GiveRepository->pushCriteria(new RequestCriteria($request));
                $this->GiveRepository->pushCriteria(new LimitOffsetCriteria($request));
            } catch (RepositoryException $e) {
                Flash::error($e->getMessage());
            }
            $Give = $this->GiveRepository->findWithoutFail($id);
        }

        if (empty($Give)) {
            return $this->sendError('Give not found');
        }

        return $this->sendResponse($Give->toArray(), 'Give retrieved successfully');


    }

    /**
     * Store a newly created Give in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $payment = $request->only('payment');
        if (isset($payment['payment']) && $payment['payment']['method']){
            if($payment['payment']['method'] == "Credit Card (Stripe Gateway)"){
                return $this->stripPayment($request);
            }else{
                return $this->cashPayment($request);

            }
        }
    }

    /**
     * Update the specified Give in storage.
     *
     * @param int $id
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request)
    {
        $Give = $this->GiveRepository->findWithoutFail($id);

        if (empty($Give)) {
            return $this->sendError('Cart not found');
        }
        $input = $request->all();

        try {
            $Give = $this->GiveRepository->update($input, $id);
            if($input['Give_status_id'] == 5 && !empty($Give)){
                $this->paymentRepository->update(['status'=>'Paid'], $Give['payment_id']);
            }

        } catch (ValidatorException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($Give->toArray(), __('lang.saved_successfully',['operator' => __('lang.Give')]));
    }

    private function stripPayment(Request $request){
        $input = $request->all();
        $amount = 0;
        try {
            $user = $this->userRepository->findWithoutFail($input['user_id']);
            if (empty($user)) {
                return $this->sendError('Give not found');
            }
            $stripeToken = Token::create(array(
                "card" => array(
                    "number" => $input['stripe_number'],
                    "exp_month" => $input['stripe_exp_month'],
                    "exp_year" => $input['stripe_exp_year'],
                    "cvc" => $input['stripe_cvc'],
                    "name" => $user->name,
                )
            ));
            if ($stripeToken->created > 0) {
                $Give = $this->GiveRepository->create(
                    $request->only('user_id','Give_status_id','tax','delivery_address_id')
                );
                Log::warning($request->all());
                foreach ($input['foods'] as $Book) {
                    $Book['Give_id'] = $Give->id;
                    $amount += $Book['price'] * $Book['quantity'];
                    $this->BookRepository->create($Book);
                }
                $amount = $amount + ($amount * $Give->tax / 100);
                $charge = $user->charge((int)($amount * 100), ['source' => $stripeToken]);
                $payment = $this->paymentRepository->create([
                    "user_id" => $input['user_id'],
                    "description" => trans("lang.payment_Give_done"),
                    "price" => $amount,
                    "status" => $charge->status, // $charge->status
                    "method" => $input['payment']['method'],
                ]);
                Log::warning($payment);
                $this->GiveRepository->update(['payment_id'=>$payment->id],$Give->id);

                $this->cartRepository->deleteWhere(['user_id' => $Give->user_id]);

                $this->notificationRepository->create([
                    "title" => trans("lang.notification_Give_done", ['Give_id' => $Give->id]),
                    "user_id" => $Give->user_id,
                    "notification_type_id" => 1,
                ]);
            }
        } catch (ValidatorException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($Give->toArray(), __('lang.saved_successfully', ['operator' => __('lang.Give')]));
    }

    private function cashPayment(Request $request)
    {
        $input = $request->all();
        $amount = 0;
        try {
            $user = $this->userRepository->findWithoutFail($input['user_id']);
            if (empty($user)) {
                return $this->sendError('Give not found');
            }
                $Give = $this->GiveRepository->create(
                    $request->only('user_id','Give_status_id','tax','delivery_address_id')
                );
                foreach ($input['foods'] as $Book) {
                    $Book['Give_id'] = $Give->id;
                    $amount += $Book['price'] * $Book['quantity'];
                    $this->BookRepository->create($Book);
                }
                $amount = $amount + ($amount * $Give->tax / 100);
                $payment = $this->paymentRepository->create([
                    "user_id" => $input['user_id'],
                    "description" => trans("lang.payment_Give_waiting"),
                    "price" => $amount,
                    "status" => 'Waiting for Client',
                    "method" => $input['payment']['method'],
                ]);

                $this->GiveRepository->update(['payment_id'=>$payment->id],$Give->id);

                $this->cartRepository->deleteWhere(['user_id' => $Give->user_id]);

                $this->notificationRepository->create([
                    "title" => trans("lang.notification_Give_done", ['Give_id' => $Give->id]),
                    "user_id" => $Give->user_id,
                    "notification_type_id" => 1,
                ]);
        } catch (ValidatorException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($Give->toArray(), __('lang.saved_successfully', ['operator' => __('lang.Give')]));
    }

}
