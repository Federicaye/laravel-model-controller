@extends('layouts.catalog')
@section('title', 'movies')

@section('cards')
<div class="d-flex flex-wrap g-3">

@foreach ($movies as $item)
    <div class="card-catalog">
     @include('partials.card')
     <p><a href="{{route('movies.show', $item->id)}}">details</a></p>
     </div>
@endforeach
</div>

@endsection