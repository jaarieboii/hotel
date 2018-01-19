<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    //
    public static function scopedog($query)
    {
        return $query->where('dog', 1);
    }
    public static function scopewithoutdog($query)
    {
            return $query->where('dog', 0);
    }
}
