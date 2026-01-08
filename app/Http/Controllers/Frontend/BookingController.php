<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Booking;

class BookingController extends Controller
{
    public function create(Tour $tour)
    {
        return view('frontend.booking.create', compact('tour'));
    }

    public function store(Request $request)
    {
        $booking = Booking::create([
            'tour_id'      => $request->tour_id,
            'user_id'      => auth()->id(),
            'start_date'   => $request->start_date,
            'num_adults'   => $request->num_adults,
            'num_children' => $request->num_children,
            'status'       => 'pending',
            'note'         => $request->note
        ]);

        foreach ($request->participants as $p) {
            $booking->participants()->create($p);
        }

        return redirect()->route('tours.show', $booking->tour->slug)
            ->with('success','Booking submitted successfully');
    }
}
