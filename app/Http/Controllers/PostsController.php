<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return response()->json([
            'success' => true,
            'data' => $posts
        ]);
    }


    

    public function store(Request $request)
    {
        // dd($request->all()); 
        $validator = Validator::make($request->all(),[
            'user_id' => 'required',
            'content' => 'required|string|max:255',
            'image_url' => 'nullable'
        ]);

        //tampilkan pesan ini jika error
        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        //jika falidasi berhasil lanjutkan
        $post = Post::create([
            'user_id' => $request->user_id,
            'content' => $request->content,
            'image_url' => $request->image_url,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil membuat Post baru',
            'data'=> $post
        ],201);
    }
}
