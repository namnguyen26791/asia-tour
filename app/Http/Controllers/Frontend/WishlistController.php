<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Tour;

class WishlistController extends Controller
{
    public function index()
    {
        $items = Wishlist::where('user_id',auth()->id())
            ->with('tour')->get();

        return view('frontend.wishlist.index', compact('items'));
    }

    public function add(Tour $tour)
    {
        Wishlist::firstOrCreate([
            'user_id' => auth()->id(),
            'tour_id' => $tour->id
        ]);

        return back();
    }

    public function remove(Tour $tour)
    {
        Wishlist::where([
            'user_id' => auth()->id(),
            'tour_id' => $tour->id
        ])->delete();

        return back();
    }
}
