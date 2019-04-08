@extends('layouts.appold')

@section('title','Create new')

@section('content')
<div class="container">
  <h1>Create new post</h1>

          <div class="row">
              <div class="col">

                  <form action="{{ route('posts.store') }}" method="POST">

                      @csrf

                      @include('posts.form')

                      @submit

                  </form>

              </div>
          </div>
</div>


@endsection
