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
@section('content')
@foreach ($movies as $item)
@if($item->id > 4 ) 
    
     @include('partials.card')
     <p><a href="{{route('books.show', $item->id)}}">details</a></p>
   @endif
@endforeach

@endsection