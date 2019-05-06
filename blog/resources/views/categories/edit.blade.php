@extends('layouts.appold')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Edit category {{ $category->id }}</h1>
        </div>

    <form action="{{ route('categories.update', [ 'id' => $category->id ]) }}" method="POST">

        @csrf
        @method('PUT')

        @include('categories.form')

        @submit

    </form>

        </form>
        <div class="row">
            <div class="d-inline p-2">
                @delete(['action' => route('category.destroy', ['id' => $category->id])])
            </div>
            <div class="d-inline p-2">
                <a href="{{ route('category.index') }}"><button type="submit" class="btn btn-primary">GO BACK</button></a>
            </div>
        </div>
    </div>

@endsection
