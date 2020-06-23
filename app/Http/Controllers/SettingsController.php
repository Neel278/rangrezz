<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class SettingsController extends Controller
{
    public function index()
    {
        return view('user.settings');
    }
    public function editProfile()
    {
        $user = User::find(auth()->user()->id)->first();
        $user->update(request()->validate([
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'username' => ['string', 'required', 'max:255', 'min:6', 'alpha_dash', Rule::unique('users')->ignore(auth()->user()->id)],
        ]));
        return redirect()->back()->with('success_profile', 'Profile Changed Successfully');
    }
    public function editEmail()
    {
        $user = User::find(auth()->user()->id)->first();
        if (Hash::check(request()->input('password'), $user->password)) {
            $user->update(request()->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]));
            return redirect()->back()->with('success_email', 'Email Changed Successfully');
        } else {
            return redirect()->back()->withErrors(['Please Enter Correct Password']);
        }
    }
    public function editPassword()
    {
        $user = User::find(auth()->user()->id)->first();
        if (request('pass') == request('pass_confirmation')) {
            if (Hash::check(request()->input('pass'), $user->password)) {
                if (!Hash::check(request()->input('password'), $user->password)) {
                    $user->update(['password' => bcrypt(request()->validate([
                        'password' => ['required', 'string', 'min:8'],
                    ])['password'])]);
                    return redirect()->back()->with('success_password', 'Password Changed Successfully');
                } else {
                    return redirect()->back()->withErrors(["Please Don't Enter Old Password Again !! "]);
                }
            } else {
                return redirect()->back()->withErrors(["Please Enter Correct Password"]);
            }
        } else {
            return redirect()->back()->withErrors(['Please Enter Matching Password and Confirm Password']);
        }
    }
}
