<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ShowTopPosts extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $posts = Post::withCount('comments')->paginate(10);

        return view('posts.index', compact('posts'));
    }
}
