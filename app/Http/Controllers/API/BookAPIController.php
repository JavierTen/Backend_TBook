<?php

namespace App\Http\Controllers\API;


use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Response;
use Prettus\Repository\Exceptions\RepositoryException;
use Flash;

/**
 * Class BookController
 * @package App\Http\Controllers\API
 */

class BookAPIController extends Controller
{
    /** @var  BookRepository */
    private $BookRepository;

    public function __construct(BookRepository $BookRepo)
    {
        $this->BookRepository = $BookRepo;
    }

    /**
     * Display a listing of the Book.
     * GET|HEAD /Books
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try{
            $this->BookRepository->pushCriteria(new RequestCriteria($request));
            $this->BookRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }
        $Books = $this->BookRepository->all();

        return $this->sendResponse($Books->toArray(), 'Books retrieved successfully');
    }

    /**
     * Display the specified Book.
     * GET|HEAD /Books/{id}
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id)
    {
        /** @var Book $Book */
        if (!empty($this->BookRepository)) {
            try{
                $this->BookRepository->pushCriteria(new RequestCriteria($request));
                $this->BookRepository->pushCriteria(new LimitOffsetCriteria($request));
            } catch (RepositoryException $e) {
                Flash::error($e->getMessage());
            }
            $Book = $this->BookRepository->findWithoutFail($id);
        }

        if (empty($Book)) {
            return $this->sendError('Book not found');
        }

        return $this->sendResponse($Book->toArray(), 'Book retrieved successfully');
    }

}
