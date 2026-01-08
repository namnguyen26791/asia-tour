@extends('frontend.layouts.app')

@section('title','Asia Tours')
@section('meta_description','Browse our Asia tours by destination, duration and travel style.')

@section('content')

<h1>All Tours</h1>

@foreach($tours as $tour)
    <article itemscope itemtype="https://schema.org/TouristTrip">
        <h2 itemprop="name">
            <a href="{{ route('tours.show',$tour->slug) }}">
                {{ $tour->title }}
            </a>
        </h2>
        <p itemprop="description">{{ $tour->short_description }}</p>
        <span>{{ $tour->duration_days }} days</span>
    </article>
@endforeach

{{ $tours->links() }}

@endsection
