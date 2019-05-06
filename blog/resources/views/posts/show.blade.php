@extends('layouts.appold')

@section('title',' Blog post')

@section('content')
<div class="container">


  <div class="row">
      @auth
    <div class="d-inline p-2">
        @can('update', $post)
      <a class="btn btn-primary" href="{{ route('posts.edit', ['id' => $post->id]) }}">EDIT</a>
        @endcan
    </div>
    <div class="d-inline p-2">
        @can('delete', $post)
      @delete(['action' => route('posts.destroy', ['id' => $post->id])])
      @endcan
    </div>

      <div class="d-inline p-2">
          @can('update', $post)
      <form action="{{ route('posts.duplicate') }}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{ $post->id }}">
          <button type="submit" class="btn btn-success">COPY</button>
          @endcan
    </form>
    </div>
      @endauth
  </div>


  <div class="row">
    @include('posts.card', compact('post'))
  </div>


  <div class="row">
    <div class="col-12">
          <div class="border-top mb-4"></div>
            <h2> Files </h2>

            @forelse($post->files()->get() as $file )
            <div class="card text-black bg-light mb-3">
                 <div class="card-header">

               <h5>{{ $file->filename }}</h5>

               <span class="text-muted">{{ $file->size }} GB</span>
               </div>

               <div class="card-body">
                   <p class="mb-0">{{ $file->created_at }} </p>
               </div>


                </div>
                @empty

                No files
              @endforelse
            </div>
        </div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="border-top mb-4"></div>
            <h3> Leave a comment here </h3>
            @include('posts.comments.create', compact('post'))
        </div>
    </div>
</div>


  <div class="row">
    <div class="col-12">
        <div class="border-top mb-4"></div>
        <h2>Comments</h2>
        @include('posts.comments.index', ['comments' => $post->comments])
  </div>

  <div class="row">
    <div class="d-inline p-2">
    <a href="{{ route('posts.index') }}"><button type="submit" class="btn btn-primary">GO BACK</button></a>

    </div>
    </div>
  </div>
</div>

@endsection
