@extends('layouts.appold')

@section('title', 'One category')

@section('content')
    <div class="container">
        <div class="row">
            <div class="d-inline p-2">
                <a class="btn btn-primary" href="{{ route('categories.edit', ['id' => $category->id]) }}">EDIT</a>
            </div>
            <div class="d-inline p-2">
                @delete(['action' => route('categories.destroy', ['id' => $category->id])])
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-2">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title"><a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></h2>

{{--                        <p class="card-text">{{ $posts->count() }} </p>--}}
{{--                        //padaryti postu skaiciu sitai categorijai--}}

                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="d-inline p-2">
                <a href="{{ route('categories.index') }}"><button type="submit" class="btn btn-primary">GO BACK</button></a>
            </div>
        </div>
    </div>
@endsection
