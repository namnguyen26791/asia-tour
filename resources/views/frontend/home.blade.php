@extends('frontend.layouts.app')

@section('title','Asia Tours – Tailor-made Travel Experiences')
@section('meta_description','Discover tailor-made Asia tours, private trips and luxury travel experiences.')

@section('content')

<h1>Asia Tours & Travel Experiences</h1>

<section>
    <h2>Featured Tours</h2>
    <div class="tour-grid">
        @foreach($featuredTours as $tour)
            <article>
                <a href="{{ route('tours.show',$tour->slug) }}">
                    <h3>{{ $tour->title }}</h3>
                    <p>{{ $tour->short_description }}</p>
                </a>
            </article>
        @endforeach
    </div>
</section>

<section>
    <h2>Top Destinations</h2>
    <ul>
        @foreach($destinations as $d)
            <li>
                <a href="{{ route('destinations.show',$d->slug) }}">
                    {{ $d->name }}
                </a>
            </li>
        @endforeach
    </ul>
</section>

@endsection
