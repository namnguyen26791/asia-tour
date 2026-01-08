@extends('frontend.layouts.app')

@section('title', $tour->title)
@section('meta_description', Str::limit(strip_tags($tour->short_description), 160))

@section('content')

<article itemscope itemtype="https://schema.org/TouristTrip">

    <h1 itemprop="name">{{ $tour->title }}</h1>

    <p>
        Duration: <strong>{{ $tour->duration_days }} days</strong>
    </p>

    <div itemprop="description">
        {!! $tour->full_description !!}
    </div>

    <section>
        <h2>Destinations</h2>
        <ul>
            @foreach($tour->destinations as $d)
                <li>
                    <a href="{{ route('destinations.show',$d->slug) }}">
                        {{ $d->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <section>
        <h2>Experiences</h2>
        <ul>
            @foreach($tour->experiences as $e)
                <li>{{ $e->name }}</li>
            @endforeach
        </ul>
    </section>

    <a href="{{ route('booking.create',$tour->id) }}">
        Book This Tour
    </a>

</article>

@endsection
