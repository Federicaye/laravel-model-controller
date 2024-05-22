@extends('layouts.catalog')
@section('title', 'books')

@section('cards')
<div class="d-flex flex-wrap g-3">

@foreach ($books as $item)
    
     @include('partials.card')
   
@endforeach
</div>

@endsection