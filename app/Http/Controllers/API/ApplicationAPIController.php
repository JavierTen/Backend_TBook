<?php

namespace App\Http\Controllers\API;


use App\Http\Requests\CreateApplicationRequest;
use App\Http\Requests\CreateFavoriteRequest;
use App\Models\Application;
use App\Repositories\ApplicationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Response;
use Prettus\Repository\Exceptions\RepositoryException;
use Flash;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class ApplicationController
 * @package App\Http\Controllers\API
 */

class ApplicationAPIController extends Controller
{
    /** @var  ApplicationRepository */
    private $ApplicationRepository;

    public function __construct(ApplicationRepository $ApplicationRepo)
    {
        $this->ApplicationRepository = $ApplicationRepo;
    }

    /**
     * Display a listing of the Application.
     * GET|HEAD /Applications
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try{
            $this->ApplicationRepository->pushCriteria(new RequestCriteria($request));
            $this->ApplicationRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }
        $Applications = $this->ApplicationRepository->all();

        return $this->sendResponse($Applications->toArray(), 'Applications retrieved successfully');
    }

    /**
     * Display a listing of the Application.
     * GET|HEAD /Applications
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function count(Request $request)
    {
        try{
            $this->ApplicationRepository->pushCriteria(new RequestCriteria($request));
            $this->ApplicationRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }
        $count = $this->ApplicationRepository->count();

        return $this->sendResponse($count, 'Count retrieved successfully');
    }

    /**
     * Display the specified Application.
     * GET|HEAD /Applications/{id}
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        /** @var Application $Application */
        if (!empty($this->ApplicationRepository)) {
            $Application = $this->ApplicationRepository->findWithoutFail($id);
        }

        if (empty($Application)) {
            return $this->sendError('Application not found');
        }

        return $this->sendResponse($Application->toArray(), 'Application retrieved successfully');
    }
    /**
     * Store a newly created Application in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();
        try {
            if(isset($input['reset']) && $input['reset'] == '1'){
                // delete all items in the Application of current user
                $this->ApplicationRepository->deleteWhere(['user_id'=> $input['user_id']]);
            }
            $Application = $this->ApplicationRepository->create($input);
        } catch (ValidatorException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($Application->toArray(), __('lang.saved_successfully',['operator' => __('lang.Application')]));
    }

    /**
     * Update the specified Application in storage.
     *
     * @param int $id
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request)
    {
        $Application = $this->ApplicationRepository->findWithoutFail($id);

        if (empty($Application)) {
            return $this->sendError('Application not found');
        }
        $input = $request->all();

        try {
//            $input['extras'] = isset($input['extras']) ? $input['extras'] : [];
            $Application = $this->ApplicationRepository->update($input, $id);

        } catch (ValidatorException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($Application->toArray(), __('lang.saved_successfully',['operator' => __('lang.Application')]));
    }

    /**
     * Remove the specified Favorite from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $Application = $this->ApplicationRepository->findWithoutFail($id);

        if (empty($Application)) {
            return $this->sendError('Application not found');

        }

        $this->ApplicationRepository->delete($id);

        return $this->sendResponse($Application, __('lang.deleted_successfully',['operator' => __('lang.Application')]));

    }

}
