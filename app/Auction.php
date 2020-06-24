<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = [
        'title', 'user_id', 'sub-title', 'description', 'painting', 'price', 'start_date', 'end_date', 'status', 'bidded_price', 'bidder_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function users()
    {
        return $this->belongsTo('App\User','owner_id');
    }
}
