<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Bidding;
use Illuminate\Http\Request;

class PaintingController extends Controller
{
    public function index()
    {
        // dd(Auction::latest()->get());
        return view('user.auction.auctions', [
            'paintings' => Auction::where('status', 0)->latest()->get(),
        ]);
    }
    public function show(Auction $painting)
    {
        // dd($painting->id);
        return view('user.auction.showauction', [
            'painting' => Auction::where('id', $painting->id)->first(),
        ]);
    }
    public function edit(Auction $painting)
    {
        $painting_db = Auction::where('id', $painting->id)->first();
        $validatedAttr = request()->validate([
            'bidamount' => ['required', 'integer']
        ]);
        // dd(auth()->user()->id);
        // $new_bid = (int) $validatedAttr['bidamount'];
        // dd($validatedAttr['bidamount'], $painting_db->price);
        if ($validatedAttr['bidamount'] > $painting_db->price) {
            $painting->update([
                'bidded_price' => $validatedAttr['bidamount'],
                'bidder_id' => auth()->user()->id,
            ]);
            return redirect()->back()->with('success_bidding', 'Your bid added succesfully !!');
        } else {
            return redirect()->back()->withErrors(['Please Enter More amound than previous bid!!']);
        }
    }
    public function update(Auction $painting)
    {
        $painting = Auction::where('id', $painting->id)->first();
        $painting->update([
            'status' => 1
        ]);
        // dd($painting->bidder_id);
        Bidding::create([
            'owner_id' => $painting->user_id,
            'auction_id' => $painting->id,
            'user_id' => $painting->bidder_id == 0 ? $painting->user_id : $painting->bidder_id,
        ]);
        return redirect()->route('auction')->with('success_painting', 'Painting Sold');
    }
}
