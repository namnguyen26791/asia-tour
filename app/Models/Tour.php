<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'title','slug','short_description','full_description',
        'duration_days','price_from','is_featured','is_active'
    ];

    public function destinations()
    {
        return $this->belongsToMany(Destination::class);
    }

    public function experiences()
    {
        return $this->belongsToMany(Experience::class);
    }

    public function images()
    {
        return $this->hasMany(TourImage::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
