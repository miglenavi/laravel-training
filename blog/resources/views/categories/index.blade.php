@extends('layouts.appold')

@section('title', 'Categories')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Categories</h2>
        </div>
        <div class="row">
            <h6>Number of categories: {{ $categories->count() }}</h6>
        </div>
        <ul>
            @forelse ($categories as $category)
                <li><a class="text-dark" href="{{ route('categories.show', $category->id) }}">{{$category->name}}</a></li>

            @empty
                <p>All categories deleted</p>
            @endforelse
        </ul>
        <div class="row">
            <div class="create-btn">
                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">CREATE A NEW CATEGORY</a>
            </div>
        </div>
    </div>
@endsection
