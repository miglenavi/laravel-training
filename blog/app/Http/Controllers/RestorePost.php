<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class RestorePost extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //gauti source resurso // id
        $id = $request->input('id');


        //issaugoti ir redirectinti
        Post::withTrashed()->findOrFail($id)->restore();

        $message = 'Post recreated';

        return redirect()->route('posts.show', $id)->with('message', $message);

    }
}
