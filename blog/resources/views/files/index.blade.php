@extends('layouts.files')

@section('title', 'Create!')

@section('content')
File count: {{ $files-> count() }}
   <div class="row">


     @foreach ($files as $file)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <li>
                          <a href="/files/{{ $file->id }}">{{ $file->filename }} </a>
                          </li>
                        <li> {{ $file->size }} GB</li>
                        <li> {{ $file->created_at }} </li>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
