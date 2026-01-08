<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Destination;

class TourController extends Controller
{
    public function index(Request $request)
    {
        $tours = Tour::where('is_active',1)
            ->when($request->destination, function ($q) use ($request) {
                $q->whereHas('destinations', fn($x) =>
                    $x->where('slug',$request->destination)
                );
            })
            ->paginate(12);

        return view('frontend.tours.index', compact('tours'));
    }

    public function show($slug)
    {
        $tour = Tour::where('slug',$slug)
            ->with(['destinations','experiences','images','reviews'])
            ->firstOrFail();

        return view('frontend.tours.show', compact('tour'));
    }

    public function search(Request $request)
    {
        $tours = Tour::where('title','LIKE',"%{$request->q}%")->paginate(10);
        return view('frontend.tours.search', compact('tours'));
    }
}
