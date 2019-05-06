@extends('layouts.app')

@section('content')
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        @include('categories.form')

        @submit(['title' => 'Save'])

    </form>
@endsection
