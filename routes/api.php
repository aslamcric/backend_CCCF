<?php

use App\Http\Controllers\Api\CategoryPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::group(['middleware' => ['auth:sanctum']], function () {});
Route::get('v1/category_post', [CategoryPostController::class, 'index']);   // http://localhost:8000/api/v1/category_post

