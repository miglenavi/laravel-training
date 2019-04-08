@extends('layouts.appold')

@section('title',' Blog post')

@section('content')
<div class="container">
  <div class="row">
    <div class="d-inline p-2">
      <a class="btn btn-primary" href="{{ route('posts.edit', ['id' => $post->id]) }}">EDIT</a>
    </div>
    <div class="d-inline p-2">
      @delete(['action' => route('posts.destroy', ['id' => $post->id])])
    </div>
  </div>
  <div class="row">
    @include('posts.card', compact('post'))
  </div>
  <div class="row">
    <div class="d-inline p-2">
    <a href="{{ route('posts.index') }}"><button type="submit" class="btn btn-primary">GO BACK</button></a>
    </div>
  </div>
</div>



@endsection
