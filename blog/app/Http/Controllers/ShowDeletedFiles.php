<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class ShowDeletedFiles extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $files = File::onlyTrashed()->paginate(15);

        return view('files.index', compact('files'));
    }
}
