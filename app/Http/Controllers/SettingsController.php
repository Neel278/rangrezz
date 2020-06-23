<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SettingsController extends Controller
{
    public function index()
    {
        return view('user.settings');
    }
    public function editProfile(Request $request)
    {
        // dd(request()->input());
        // $validatedAttr = ;
        // dd($validatedAttr);
        $user = User::find(auth()->user()->id)->first();
        $user->update(request()->validate([
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'username' => ['string', 'required', 'max:255', 'min:6','alpha_dash', Rule::unique('users')->ignore(auth()->user()->id)],
        ]));
        return redirect()->back();
        
    }
}
