@extends('layouts.app')

@section('title', 'Create!')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        @input([
            'label' => 'Post title',
            'name' => 'name'
        ])

        @textarea([
            'label' => 'Post content',
            'name' => 'content'
        ])

        @include('components.form.submit')
    </form>
@endsection
