<?php

namespace App\Http\Controllers\API;


use App\Models\Categorie;
use App\Repositories\CategorieRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Response;
use Prettus\Repository\Exceptions\RepositoryException;
use Flash;

/**
 * Class CategorieController
 * @package App\Http\Controllers\API
 */

class CategoriesAPIController extends Controller
{
    /** @var  CategorieRepository */
    private $CategorieRepository;

    public function __construct(CategorieRepository $categorieRepo)
    {
        $this->CategorieRepository = $categorieRepo;
    }

    /**
     * Display a listing of the Categorie.
     * GET|HEAD /categories
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try{
            $this->CategorieRepository->pushCriteria(new RequestCriteria($request));
            $this->CategorieRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }

        $categories = $this->CategorieRepository->all();
       
        return $this->sendResponse($categories->toArray(), 'Categories retrieved successfully');
    }

    /**
     * Display the specified Categorie.
     * GET|HEAD /categories/{id}
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        /** @var Categorie $Categorie */
        if (!empty($this->CategorieRepository)) {
            $Categorie = $this->CategorieRepository->findWithoutFail($id);
        }

        if (empty($Categorie)) {
            return $this->sendError('Categorie not found');
        }

        return $this->sendResponse($Categorie->toArray(), 'Categorie retrieved successfully');
    }
}
