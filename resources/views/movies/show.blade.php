@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main class="container">
    <h1>{{ $movie->title }}</h1>
    <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
</main>

@endsection