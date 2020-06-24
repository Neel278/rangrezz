<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidding extends Model
{
    protected $fillable = [
        'owner_id', 'auction_id', 'user_id'
    ];
    public function auctions()
    {
        return $this->hasMany(Auction::class,'auction_id');
    }
}
