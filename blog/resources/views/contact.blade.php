@extends('layouts.appold')

@section('title', 'Contacts')


@section('content')
<div class="container">

  <h2>Who am I?</h2>
  <ul>
    <li>{{ $name }}</li>
    <li>{{ $email }}</li>
    <li>{{ $phone }}</li>
  </ul>


  <h2>What do I like?</h2>

  <ul>
    @forelse ($interests as $interest)
    <li>{{ $interest }}</li>

    @empty
    <p>I don't like anything</p>
    @endforelse
  </ul>

  @endsection

</div>
