@extends('layouts.files')

@section('title', 'Files')

@section('content')
    <div class="container">

        <div class="row">
            @each('files.card', $files, 'file', 'files.no-records')
        </div>
    </div>
@endsection
