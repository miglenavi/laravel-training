@extends('layouts.files')

@section('title','Create new')

@section('content')

<div class="container">
  <h1>Create new file</h1>
  <div class="row">
    <div class="col">
      <form action="{{ route('files.store') }}" method="POST">

            @csrf

            @include('files.form')

            @submit
      </form>
    </div>
  </div>
  <div class="row">
    <div class="d-inline p-2">
    <a href="{{ route('files.index') }}"><button type="submit" class="btn btn-primary">GO BACK</button></a>
    </div>
  </div>
</div>

@endsection
