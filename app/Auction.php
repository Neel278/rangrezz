<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = [
        'title', 'user_id', 'sub-title', 'description', 'painting', 'price', 'start_date', 'end_date', 'status', 'bidded_pice',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
