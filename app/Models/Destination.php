<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['name','slug','description'];

    public function tours()
    {
        return $this->belongsToMany(Tour::class);
    }
}
