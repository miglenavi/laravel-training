<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class DuplicatePost extends Controller
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

      //klonuoti instanca
      $originalPost = Post::findOrFail($id);

      $newPost = $originalPost->replicate();

      //pakeisti pavadinima
      $newPost->name .= ' (klonas)';

      //issaugoti ir redirectinti
      $newPost->save();

      $message = 'Post cloned successfully';

      return redirect()->route('posts.show', $newPost)->with('message', $message);
    }
}
