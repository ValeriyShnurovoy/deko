<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Model\NewsModel as News;


/**
 * Class NewsController
 * @package App\Http\Controllers
 */
class NewsController extends Controller
{
    /**
     * @param int $rowNumber
     * @param int $offset
     * @return \Illuminate\Support\Collection
     */
    public function index($rowNumber = 15, $offset = 0)
    {
        $news = new News();
        return $news->getAllData(false, $rowNumber, $offset);
    }

    /**
     * @param NewsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(NewsRequest $request)
    {
        $news = new News();
        return response()->json($news->create($request->validated()), 201);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $news = new News();
        return response()->json($news->getData($id), 200);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function showAll()
    {
        $news = new News();
        return $news->getAllData(true);
    }

    /**
     * @param NewsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(NewsRequest $request)
    {
        $news = new News();
        return response()->json($news->updateData($request->validated()), 201);
    }
}
