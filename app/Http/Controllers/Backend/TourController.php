<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        return view('backend.page.home');
    }

    public function create()
    {
        return view('backend.page.tours.create');
    }
}
