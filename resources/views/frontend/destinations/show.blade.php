@extends('frontend.layouts.app')

@section('title', $destination->name . ' Tours')
@section('meta_description','Explore tours in ' . $destination->name)

@section('content')

@include('frontend.partials.breadcrumbs', [
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Tours', 'url' => route('tours.index')],
        ['label' => $tour->title]
    ]
])

<h1>{{ $destination->name }} Tours</h1>

@foreach($destination->tours as $tour)
    <article>
        <a href="{{ route('tours.show',$tour->slug) }}">
            {{ $tour->title }}
        </a>
    </article>
@endforeach

@endsection
