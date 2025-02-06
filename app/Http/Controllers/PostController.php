<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::create([
            "title" => "Example Post",
            "content" => "This is an example post.",
        ]);

        $post2 = Post::create([
            "title" => "Example Post",
            "content" => "This is an example post 2.",
        ]);

        $post3 = Post::create([
            "title" => "Example Post",
            "content" => "This is an example post 3.",
        ]);

//        dd($post->toArray(), $post2->toArray(), $post3->toArray());
    }
}
