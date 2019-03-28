@extends('layouts.storage')

@section('title', 'Vienas irasas')

@section('content')
<p>
Vienas irasas {{ $id }}
</p>

   <div class="row">

     @forelse ($files as $file)
            <div class="col">
                <div class="card {{ $loop->first ? 'bg-primary' : '' }}">
                    <div class="card-body">
                      <h2>{{ $file['filename'] }}</h2>
                      <small>{{ $file['size'] }}</small>
                      <div>
                          {{ $file['created_at'] }}
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
