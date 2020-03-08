<?php

namespace App\Http\Controllers\API;


use App\Models\Facultie;
use App\Repositories\FacultieRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Response;
use Prettus\Repository\Exceptions\RepositoryException;
use Flash;

/**
 * Class FacultieController
 * @package App\Http\Controllers\API
 */

class FacultieAPIController extends Controller
{
    /** @var  FacultieRepository */
    private $FacultieRepository;

    public function __construct(FacultieRepository $FacultieRepo)
    {
        $this->FacultieRepository = $FacultieRepo;
    }

    /**
     * Display a listing of the Facultie.
     * GET|HEAD /Faculties
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try{
            $this->FacultieRepository->pushCriteria(new RequestCriteria($request));
            $this->FacultieRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }
        $inputs = $request->all();
        if($request->has(['myLon','myLat','areaLon','areaLat'])){
            $Faculties = $this->FacultieRepository->near($inputs['myLon'],$inputs['myLat'],$inputs['areaLon'],$inputs['areaLat']);
        }else{
            $Faculties = $this->FacultieRepository->all();
        }

        return $this->sendResponse($Faculties->toArray(), 'Faculties retrieved successfully');
    }

    /**
     * Display the specified Facultie.
     * GET|HEAD /Faculties/{id}
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id)
    {
        /** @var Facultie $Facultie */
        if (!empty($this->FacultieRepository)) {
            try{
                $this->FacultieRepository->pushCriteria(new RequestCriteria($request));
                $this->FacultieRepository->pushCriteria(new LimitOffsetCriteria($request));
            } catch (RepositoryException $e) {
                Flash::error($e->getMessage());
            }
            $Facultie = $this->FacultieRepository->findWithoutFail($id);
        }

        if (empty($Facultie)) {
            return $this->sendError('Facultie not found');
        }

        return $this->sendResponse($Facultie->toArray(), 'Facultie retrieved successfully');
    }
}
