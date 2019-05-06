@extends('layouts.files')

@section('title', 'Files')

@section('content')
<div class="container">
  <div class="row">
    <h2>Files storage</h2>
  </div>
  <div class="row">
    <h6>Number of files: {{ $files->count() }}</h6>
  </div>
  <div class="row">
    @each('files.card', $files, 'file', 'files.no-records')
  </div>
    <div class="row">
      <div class="create-btn">
      <a href="{{ route('files.create') }}" class="btn btn-primary">CREATE A NEW FILE</a>
      </div>
    </div>
    <div class="row">
      {{ $files->links() }}
    </div>
  </div>
@endsection
