<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = ['user_id','tour_id'];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
