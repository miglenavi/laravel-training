<?php

namespace App\Http\Controllers;

use App\File;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $files = \App\File::all();
      return view('files.index', compact('files'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $file = new \App\File;
      return view('files.create', compact('file'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\FileRequest $request)
    {
        $file = new \App\File();
        $file->filename = $request->input('filename');
        $file->size = $request->input('size');
        $file->save();

        $message = 'File is created successfully';
        return redirect()->route('files.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $file = \App\File::findOrFail($id);
      return view('files.show', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file = \App\File::find($id);
        return view('files.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\FileRequest $request, $id)
    {
      $file = new \App\File();
      $file->filename = $request->input('filename');
      $file->size = $request->input('size');
      $file->save();

      $message = 'File is created successfully';
      return redirect()->route('files.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\File::destroy($id);

        $message = 'File is created successfully';
        return redirect()->route('files.index')->with('message', $message);
    }
}
