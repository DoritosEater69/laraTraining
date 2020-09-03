<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mail;
use App\Mail\profile_update_mail;
use Hash;
use Auth;
use Validator;

class UserProfile extends Controller
{

    public function index(){
        $user = Auth::user();
        return view('userprofile.index', ['user' => $user]);
    }

    public function update(Request $request){
        $this->validate($request, [
        'name' => 'string',
        'email' => 'string|max:255',
        'password' => 'min:1|max:100',
        // 'g-recaptcha-response' => 'required|captcha'
        ]);

        $user = Auth::user();

        $user->fill(array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->newPassword)
        ));
        $user->save();

        Mail::to($user->email)->send(new profile_update_mail($user));
        return view('userprofile.index', ['user' => $userUpdate]);
    }

    public function edit(){
        $user = Auth::user();
        return view('userprofile.edit', ['user' => $user]);
    }
}
