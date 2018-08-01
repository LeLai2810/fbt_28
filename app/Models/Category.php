<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'tour_id',
        'name',
    ];

    public function tour()
    {
        return $this->belongsTo('App\Models\Tour');
    }
}
