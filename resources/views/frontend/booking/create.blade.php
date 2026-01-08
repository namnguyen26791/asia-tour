@extends('frontend.layouts.app')

@section('title','Book ' . $tour->title)

@section('content')

<h1>Book: {{ $tour->title }}</h1>

<form method="POST" action="{{ route('booking.store') }}">
    @csrf
    <input type="hidden" name="tour_id" value="{{ $tour->id }}">

    <label>Start Date</label>
    <input type="date" name="start_date" required>

    <label>Adults</label>
    <input type="number" name="num_adults" min="1">

    <label>Children</label>
    <input type="number" name="num_children" min="0">

    <button type="submit">Submit Booking</button>
</form>

@endsection
