@extends('layouts.app')

@section('title', 'Vienas irasas')

@section('content')
Vieno iraso perziura: <br><br>
       @include('posts.card')
@endsection
