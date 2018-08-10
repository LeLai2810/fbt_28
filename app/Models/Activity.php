<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'tour_id',
        'content',
        'image',
    ];

    public function tour()
    {
        return $this->belongsTo('App\Models\Tour');
    }
}
