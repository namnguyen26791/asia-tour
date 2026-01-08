<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['name','slug'];

    public function tours()
    {
        return $this->belongsToMany(Tour::class);
    }
}
