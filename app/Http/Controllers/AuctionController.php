<?php

namespace App\Http\Controllers;

use App\Auction;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.auction.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedAttr = request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'sub-title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'painting' => ['required', 'file'],
            'price' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
        ]);
        if (request('painting')) {
            $validatedAttr['painting'] = 'storage/' . request('painting')->store('paintings');
        }
        Auction::create([
            'user_id' => auth()->user()->id,
            'title' => $validatedAttr['title'],
            'sub-title' => $validatedAttr['sub-title'],
            'description' => $validatedAttr['description'],
            'painting' => $validatedAttr['painting'],
            'price' => $validatedAttr['price'],
            'start_date' => $validatedAttr['start_date'],
            'end_date' => $validatedAttr['end_date'],
        ]);
        return redirect()->back()->with('success_auction', 'Auction added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function show(Auction $auction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function edit(Auction $auction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auction $auction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auction $auction)
    {
        //
    }
}
