@extends('layouts.appold')

@section('title','Edit file')

@section('content')
<div class="container">
  <div class="row">
    <h1>Edit file {{ $file->id }}</h1>
  </div>
  <form action="{{ route('files.update', ['id' => $file->id]) }}" method="POST">
        @csrf
        @method('PUT')

        @include('files.form')

        @submit
    </form>
      <div class="row">
        <div class="d-inline p-2">
          @delete(['action' => route('files.destroy', ['id' => $file->id])])
        </div>
        <div class="d-inline p-2">
          <a href="{{ route('files.index') }}"><button type="submit" class="btn btn-primary">GO BACK</button></a>
          </div>
      </div>
</div>
@endsection
