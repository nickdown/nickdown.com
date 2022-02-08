<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShowPostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->published()
            ->orWhere('user_id', auth()->id())
            ->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post, ShowPostRequest $request)
    {
        return view('posts.show', ['post' => $post]);
    }
}
