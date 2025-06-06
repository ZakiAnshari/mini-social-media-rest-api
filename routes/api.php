<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    //Menghandle postsempt
    Route::prefix('posts')->group(function () {
        Route::get('/', [PostsController::class, 'index']); //Mengambil Semua data
        Route::post('/', [PostsController::class, 'store']); //Menyimpan data
        Route::get('{id}', [PostsController::class, 'show']); //Mengambil detail data sesuai id
        Route::put('{id}', [PostsController::class, 'update']); //Mengupdate data
        Route::delete('{id}', [PostsController::class, 'destroy']); //Menghapus data
    });

    //Menghandle Comments
    Route::prefix('comments')->group(function () {
        Route::post('/', [CommentsController::class, 'store']); //Menyimpan komentar baru
        Route::delete('{id}', [CommentsController::class, 'destroy']); //Menghapus Comentar
    });

    //MEnghadle Likes
    Route::prefix('likes')->group(function () {
        Route::post('/', [LikesController::class, 'store']); //Menyimpan likes baru
        Route::delete('{id}', [LikesController::class, 'destroy']); //Menghapus likes
    });
});
