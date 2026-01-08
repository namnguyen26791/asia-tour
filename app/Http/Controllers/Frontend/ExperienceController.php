<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
     public function show($slug)
    {
        $experience = Experience::where('slug',$slug)
            ->with('tours')->firstOrFail();

        return view('frontend.experiences.show', compact('experience'));
    }
}
