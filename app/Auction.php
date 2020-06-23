<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = [
        'title', 'sub-title', 'description', 'painting', 'price', 'start_date', 'end_date',
    ];
}
