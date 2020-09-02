<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Mail\welcome_mail;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $user_role = $user->roles->pluck('name');
        return view('home', ['user' => $user]);
    }

    public function sendMail()
    {
        $user = Auth::user();
        Mail::to($user->email)->send(new welcome_mail($user));
        return view('success', ['user' => $user]);
    }
}
