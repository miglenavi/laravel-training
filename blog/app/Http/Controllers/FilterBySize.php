<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FilterBySize extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $files = File::orderBy('size', 'DESC')->take(10)->get();


        return view('files.filter', compact('files'));
    }
}
