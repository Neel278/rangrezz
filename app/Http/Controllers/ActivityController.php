<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auction;

class ActivityController extends Controller
{
    public function index()
    {
    	return view('user.activity.index');
    }
    public function yourAuctions()
    {
    	return view('user.activity.your_auctions',[
    		'paintings' => Auction::where('user_id',auth()->user()->id)->latest()->get(),
    	]);
    }
    public function winningAuctions()
    {
    	return view('user.activity.winning_auctions',[
    		'paintings' => Auction::where([
    			['user_id','!=' ,auth()->user()->id],
    			['status',1],
    			['bidder_id',auth()->user()->id],
    		])->latest()->get(),
    	]);
    }
    public function soldedPainting()
    {
    	return view('user.activity.solded_paintings');
    }
    public function claimPainting()
    {
    	return view('user.activity.claim_paintings');
    }
}
