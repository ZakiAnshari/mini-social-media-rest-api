<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\JWTAuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\MessagesController;
use App\Http\Middleware\JWTMiddleware;


Route::prefix('v1')->group(function () {

    //Handle auth
    Route::post('register', [JWTAuthController::class, 'register']);
    Route::post('login', [JWTAuthController::class, 'login']);

    //Menghandle postsempt
    Route::middleware(JWTMiddleware::class)->prefix('posts')->group(function () {
        Route::get('/', [PostsController::class, 'index']); //Mengambil Semua data
        Route::post('/', [PostsController::class, 'store']); //Menyimpan data
        Route::get('{id}', [PostsController::class, 'show']); //Mengambil detail data sesuai id
        Route::put('{id}', [PostsController::class, 'update']); //Mengupdate data
        Route::delete('{id}', [PostsController::class, 'destroy']); //Menghapus data
    });

    //Menghandle Comments
    Route::middleware(JWTMiddleware::class)->prefix('comments')->group(function () {
        Route::post('/', [CommentsController::class, 'store']); //Menyimpan komentar baru
        Route::delete('{id}', [CommentsController::class, 'destroy']); //Menghapus Comentar
    });

    //MEnghadle Likes
    Route::middleware(JWTMiddleware::class)->prefix('likes')->group(function () {
        Route::post('/', [LikesController::class, 'store']); //Menyimpan likes baru
        Route::delete('{id}', [LikesController::class, 'destroy']); //Menghapus likes
    });

    //Menghandle messages
    Route::middleware(JWTMiddleware::class)->prefix('messages')->group(function () {
        Route::post('/', [MessagesController::class, 'store']); //Kirim pesan
        Route::get('{id}', [MessagesController::class, 'show']); //lihat detail pesan
        Route::get('/getMessages/{user_id}', [MessagesController::class, 'getMessages']); //lihat  pesan masuk berdasarkan user_id
        Route::delete('{id}', [MessagesController::class, 'destroy']); //Menghapus pesan
    });
});
