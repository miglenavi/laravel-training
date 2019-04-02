@extends('layouts.files')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Create a new file</h1>

    <form class="" action="/files" method="post">
      @csrf

      <div class="field">
        <label class="label" for="title">File Title</label>

        <div class="control">
          <input type="text"  class="input" name="filename" required>
        </div>
      </div>

      <div class="field">
        <label class="label" for="description" required>File size</label>

        <div class="control">
          <input type="number" class="input" name="size" required>
        </div>
      </div>

      <div class="field">
        <div class="control">
          <button type="submit">Create File</button>
        </div>
      </div>
@endsection
  </body>
</html>
