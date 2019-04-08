@extends('layouts.appold')

@section('title','Edit blog post')

@section('content')
<div class="container">
  <div class="row">
    <h1>Edit blog post {{ $post->id }}</h1>
  </div>
  <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">
        @csrf
        @method('PUT')

        @include('posts.form')

        @submit
    </form>
      <div class="row">
        <div class="d-inline p-2">
          @delete(['action' => route('posts.destroy', ['id' => $post->id])])
        </div>
        <div class="d-inline p-2">
          <a href="{{ route('posts.index') }}"><button type="submit" class="btn btn-primary">GO BACK</button></a>
          </div>
      </div>
</div>
@endsection
