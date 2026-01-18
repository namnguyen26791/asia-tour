<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Destination;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.asia', [
            'featuredTours' => Tour::where('is_featured',1)->limit(6)->get(),
            'destinations'  => Destination::all()
        ]);
    }
}
