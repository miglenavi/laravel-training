
@extends('layouts.app')

@section('title', 'Irašai')

@section('content')
   <div class="row">

     @forelse ($posts as $post)
            <div class="col">
                <div class="card {{ $loop->first ? 'bg-primary' : '' }}">
                    <div class="card-body">
                        <h2>{{ $post['title'] }}</h2>
                        <small>{{ $post['time'] }}</small>
                        <div>
                            {{ $post['content'] }}
                        </div>

                    </div>
                </div>
            </div>
        @empty
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        Nėra įrašų
                    </div>
                </div>
            </div>
        @endforelse
    </div>
@endsection
