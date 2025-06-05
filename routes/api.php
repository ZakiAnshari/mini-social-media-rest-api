<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');

    Route::prefix('v1')->group(function(){
        //Menghandle postsempt
            Route::prefix('posts')->group(function(){
                Route::get('/', [PostsController::class,'index']); //Mengambil Semua data
                Route::post('/', [PostsController::class,'store']); //Menyimpan data
                Route::get('{id}', [PostsController::class,'show']); //Mengambil detail data sesuai id
                Route::put('{id}', [PostsController::class,'update']); //Mengupdate data
                Route::delete('{id}', [PostsController::class,'destroy']); //Menghapus data
            });
    });


