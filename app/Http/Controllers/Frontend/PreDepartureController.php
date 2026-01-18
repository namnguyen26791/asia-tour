<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreDepartureController extends Controller
{
    public function index()
    {
        return view('frontend.pre-departure.show');
    }
}
