@extends('layouts.files')

@section('title', 'Vienas irasas')

@section('content')
Vieno iraso perziura: <br><br>
       @include('files.card', ['file'=> $file])
@endsection
