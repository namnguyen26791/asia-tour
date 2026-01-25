<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllTourController extends Controller
{
    public function index()
    {
        return view('backend.page.all-tours.index');
    }

    public function create()
    {
        // return view('backend.page.all-tours.create');
    }
}
