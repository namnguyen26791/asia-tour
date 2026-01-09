@extends('frontend.layouts.app')

@section('title','Search Tours in Asia')
@section('meta_description','Search Asia tours by destination, experience and duration.')

@section('content')

@include('frontend.partials.breadcrumbs', [
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Search Tours']
    ]
])

<h1>Search Results</h1>

{{-- SEARCH SUMMARY (SEO + UX) --}}
<p>
    @if(!empty($filters['destination']))
        Destination:
        <strong>{{ ucfirst($filters['destination']) }}</strong>
    @endif

    @if(!empty($filters['experience']))
        | Experience:
        <strong>{{ ucfirst($filters['experience']) }}</strong>
    @endif

    @if(!empty($filters['duration']))
        | Duration:
        <strong>{{ $filters['duration'] }} days</strong>
    @endif
</p>

@if($tours->count())
    <section class="tour-results">
        @foreach($tours as $tour)
            <article itemscope itemtype="https://schema.org/TouristTrip">
                <h2 itemprop="name">
                    <a href="{{ route('tours.show',$tour->slug) }}">
                        {{ $tour->title }}
                    </a>
                </h2>

                <p itemprop="description">
                    {{ Str::limit($tour->short_description,160) }}
                </p>

                <p>
                    <strong>{{ $tour->duration_days }} Days</strong>
                    | From {{ number_format($tour->price_from) }} USD
                </p>
            </article>
        @endforeach
    </section>

    {{ $tours->links() }}

@else
    <p>No tours found. Try different filters.</p>
@endif

@endsection
