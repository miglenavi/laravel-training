@extends('layouts.appold')

@section('title', 'Blog posts')

@section('content')
<div class="container">
  <div class="row">
    <h2>Blog posts</h2>
  </div>
  <div class="row">
    <h6>Number of posts: {{ $posts->count() }}</h6>
  </div>
  <div class="row">
    <div class="create-btn">
    <a href="{{ route('posts.create') }}" class="btn btn-primary">CREATE A NEW POST</a>
    </div>
  </div>
  <div class="row">
    @each('posts.card', $posts, 'post', 'posts.no-records')
  </div>
    <div class="row">
      {{ $posts->links() }}
    </div>
  </div>
@endsection
