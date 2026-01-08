<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'tour_id','user_id','start_date',
        'num_adults','num_children','total_price','status','note'
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function participants()
    {
        return $this->hasMany(BookingParticipant::class);
    }
}
