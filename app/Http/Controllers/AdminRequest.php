<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminRequest extends Controller
{
    public function index(){
        return view('admin_req_form');
    }

//Active user requests admin role
    public function send(){

        $user = Auth::user();
        $user->request_admin_role = true;
        $user->save();

        return view('home', compact('user'));
    }
}
