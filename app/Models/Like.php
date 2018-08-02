<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'user_id',
        'review_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function review()
    {
        return $this->belongsTo('App\Models\Review');
    }
}
