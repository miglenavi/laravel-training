<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $files = [
        [
          'filename' => 'Pictures of Toys',
          'size' => '3GB',
          'created_at' =>  date('Y-m-d H:i:s') ,
        ],
        [
          'filename' => 'Pictures of Candies',
          'size' => '5GB',
          'created_at' =>  date('Y-m-d H:i:s') ,
        ],
      ];

        return view('storage.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $files = [
        [
          'filename' => 'Pictures of Toys',
          'size' => '3GB',
          'created_at' =>  date('Y-m-d H:i:s') ,
        ],
        [
          'filename' => 'Pictures of Candies',
          'size' => '5GB',
          'created_at' =>  date('Y-m-d H:i:s') ,
        ],
        [
          'filename' => 'Pictures of Toys',
          'size' => '3GB',
          'created_at' =>  date('Y-m-d H:i:s') ,
        ],
        [
          'filename' => 'Pictures of Candies',
          'size' => '5GB',
          'created_at' =>  date('Y-m-d H:i:s') ,
        ],
      ];

        return view('storage.index', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $files = [
        [
          'filename' => 'Pictures of Toys',
          'size' => '3GB',
          'created_at' =>  date('Y-m-d H:i:s') ,
        ],
        [
          'filename' => 'Pictures of Candies',
          'size' => '5GB',
          'created_at' =>  date('Y-m-d H:i:s') ,
        ],
      ];

      return view('storage.show', compact('id', 'files'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
