@extends('frontend.layouts.app')

@section('title', $experience->name . ' Tours')

@section('content')

<h1>{{ $experience->name }} Tours</h1>

@foreach($experience->tours as $tour)
    <article>
        <a href="{{ route('tours.show',$tour->slug) }}">
            {{ $tour->title }}
        </a>
    </article>
@endforeach

@endsection
