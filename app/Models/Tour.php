<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'name',
        'duration',
        'itinerary',
        'start_date',
        'price',
    ];

    public function categories()
    {
        return $this->hasMany('App\Models\Category');
    }

    public function activities()
    {
        return $this->hasMany('App\Models\Activity');
    }

    public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }

    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }
}
