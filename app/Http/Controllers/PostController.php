<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShowPostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //
    }

    public function show(Post $post, ShowPostRequest $request)
    {
        return view('posts.show', ['post' => $post]);
    }
}
