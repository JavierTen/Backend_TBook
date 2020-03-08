<?php

namespace App\Http\Controllers\API;


use App\Models\GiveStatus;
use App\Repositories\GiveStatusRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Response;
use Prettus\Repository\Exceptions\RepositoryException;
use Flash;

/**
 * Class GiveStatusController
 * @package App\Http\Controllers\API
 */

class GiveStatusAPIController extends Controller
{
    /** @var  GiveStatusRepository */
    private $GiveStatusRepository;

    public function __construct(GiveStatusRepository $GiveStatusRepo)
    {
        $this->GiveStatusRepository = $GiveStatusRepo;
    }

    /**
     * Display a listing of the GiveStatus.
     * GET|HEAD /GiveStatuses
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try{
            $this->GiveStatusRepository->pushCriteria(new RequestCriteria($request));
            $this->GiveStatusRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }
        $GiveStatuses = $this->GiveStatusRepository->all();

        return $this->sendResponse($GiveStatuses->toArray(), 'Give Statuses retrieved successfully');
    }

    /**
     * Display the specified GiveStatus.
     * GET|HEAD /GiveStatuses/{id}
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        /** @var GiveStatus $GiveStatus */
        if (!empty($this->GiveStatusRepository)) {
            $GiveStatus = $this->GiveStatusRepository->findWithoutFail($id);
        }

        if (empty($GiveStatus)) {
            return $this->sendError('Give Status not found');
        }

        return $this->sendResponse($GiveStatus->toArray(), 'Give Status retrieved successfully');
    }
}
