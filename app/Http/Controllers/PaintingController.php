<?php

namespace App\Http\Controllers;

use App\Auction;
use Illuminate\Http\Request;

class PaintingController extends Controller
{
    public function index()
    {
        // dd(Auction::latest()->get());
        return view('user.auction.auctions', [
            'paintings' => Auction::latest()->get(),
        ]);
    }
}
