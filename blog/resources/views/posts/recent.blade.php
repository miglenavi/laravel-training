@extends('layouts.appold')

@section('title', 'Blog posts')

@section('content')
    <div class="container">
        <div class="row">
            @each('posts.card', $posts, 'post', 'posts.no-records')
        </div>
    </div>
@endsection
