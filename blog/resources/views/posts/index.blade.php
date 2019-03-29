
@extends('layouts.app')

@section('title', 'Irašai')

@section('content')

     Viso irasu: {{ $posts-> count() }}

   <div class="row">

     @each('posts.card', $posts, 'post', 'posts.no-records')

   </div>

@endsection
