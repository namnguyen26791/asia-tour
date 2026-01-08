@extends('frontend.layouts.app')

@section('title','My Wishlist')

@section('content')

<h1>My Wishlist</h1>

@foreach($items as $item)
    <article>
        <a href="{{ route('tours.show',$item->tour->slug) }}">
            {{ $item->tour->title }}
        </a>
    </article>
@endforeach

@endsection
