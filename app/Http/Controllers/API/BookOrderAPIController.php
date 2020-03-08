<?php

namespace App\Http\Controllers\API;


use App\Models\BookOrder;
use App\Repositories\BookOrderRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Response;
use Prettus\Repository\Exceptions\RepositoryException;
use Flash;

/**
 * Class BookOrderController
 * @package App\Http\Controllers\API
 */

class BookOrderAPIController extends Controller
{
    /** @var  BookOrderRepository */
    private $BookOrderRepository;

    public function __construct(BookOrderRepository $BookOrderRepo)
    {
        $this->BookOrderRepository = $BookOrderRepo;
    }

    /**
     * Display a listing of the BookOrder.
     * GET|HEAD /BookOrders
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try{
            $this->BookOrderRepository->pushCriteria(new RequestCriteria($request));
            $this->BookOrderRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }
        $BookOrders = $this->BookOrderRepository->all();

        return $this->sendResponse($BookOrders->toArray(), 'Book Orders retrieved successfully');
    }

    /**
     * Display the specified BookOrder.
     * GET|HEAD /BookOrders/{id}
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        /** @var BookOrder $BookOrder */
        if (!empty($this->BookOrderRepository)) {
            $BookOrder = $this->BookOrderRepository->findWithoutFail($id);
        }

        if (empty($BookOrder)) {
            return $this->sendError('Book Order not found');
        }

        return $this->sendResponse($BookOrder->toArray(), 'Book Order retrieved successfully');
    }
}
