<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * 投稿コントローラクラス
 */
class PostController extends Controller
{
    /**
     * @api {get} /post/index
     * @apiName 投稿一覧取得
     * @apiGroup Post
     *
     * @apiSuccess {object} JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        return response()->json();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        return response()->json();
    }
}