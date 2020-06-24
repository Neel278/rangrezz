<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auction;
use App\User;

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
    public function soldedPainting(Auction $painting)
    {
    	$painting = Auction::where('id',$painting->id)->first();
    	if($painting->user_id == auth()->user()->id){
    		$buyer = User::where('id',$painting->bidder_id)->first();
    		return view('user.activity.solded_paintings',[
    			'painting' => $painting,
    			'buyer' => $buyer
    		]);
    	}else{
    		return redirect()->route('your_auctions')->withErrors('You can see onlu your paintings!!');
    	}
    }
    public function claimPainting(Auction $painting)
    {
    	$painting = Auction::where('id',$painting->id)->first();
    	// dd($painting);
    	if($painting->bidder_id == auth()->user()->id){
    		$seller = User::where('id',$painting->user_id)->first();
    		return view('user.activity.claim_paintings',[
    			'painting' => $painting,
    			'seller' => $seller
    		]);
    	}else{
    		return redirect()->route('winning_auctions')->withErrors('You can see onlu your paintings!!');
    	}
    }
}
