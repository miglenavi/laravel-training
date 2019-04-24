<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowRecentPosts extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $posts = Post::withCount('comments')
            //->oneDayOld()
            ->createdLaterThan(Carbon::now()->subMonth())
            ->orderBy('created_at', 'DESC')
            ->take(5)
            ->get();

        return view('posts.recent', compact('posts'));
    }
}
