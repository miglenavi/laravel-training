@extends('layouts.files')

@section('title', 'One file')

@section('content')
<div class="container">
  <div class="row">
    <div class="d-inline p-2">
      <a class="btn btn-primary" href="{{ route('files.edit', ['id' => $file->id]) }}">EDIT</a>
    </div>
    <div class="d-inline p-2">
      @delete(['action' => route('files.destroy', ['id' => $file->id])])
    </div>
  </div>
  <div class="row">
    @include('files.card', compact('file'))
  </div>
  <div class="row">
    <div class="d-inline p-2">
    <a href="{{ route('files.index') }}"><button type="submit" class="btn btn-primary">GO BACK</button></a>
    </div>
  </div>
</div>
@endsection
