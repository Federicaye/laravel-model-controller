@extends('layouts.catalog')
@section('title', 'books')

@section('cards')
<div class="d-flex flex-wrap g-3">


@foreach ($books as $item)
 
    <div class="card-catalog">
     @include('partials.card')
     <p><a href="{{route('books.show', $item->id)}}">details</a></p>
     </div>
@endforeach
</div>

@endsection

@section('content')
@foreach ($books as $item)
@if($item->id > 4 ) 
    
     @include('partials.card')
     <p><a href="{{route('books.show', $item->id)}}">details</a></p>
   @endif
@endforeach

@endsection