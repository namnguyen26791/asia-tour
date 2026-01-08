<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function show($slug)
    {
        $destination = Destination::where('slug',$slug)
            ->with('tours')->firstOrFail();

        return view('frontend.destinations.show', compact('destination'));
    }
}
