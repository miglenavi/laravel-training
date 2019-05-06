<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class ShowDeletedComments extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $comments = Comment::onlyTrashed()->paginate(15);

        return view('posts.comments.index', compact('comments'));
    }
}
