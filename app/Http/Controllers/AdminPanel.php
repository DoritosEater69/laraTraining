<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class AdminPanel extends Controller
{

//All Users with an active Admin Request State -> packed in view as users

    public function index(){
        $users = User::where('request_admin_role', '1')->get();

        return view('admin.requests', compact('users'));
    }

//All Users with an active Admin Request State
//Each User gets a new Role "Admin" + getting thei "User" Role removed
//Admin Request State set to none - save and redirected to Admin route

    public function send(){
        $users = User::where('request_admin_role', '1')->get();

        $users->each(function($user) {
            $user->assignRole('admin');
            $user->removeRole('user');
            $user->request_admin_role = false;
            $user->save();
        });

        return redirect()->route('admin');
    }

//Find Single User with his specific ID -> gets same as above

    public function single($user){
        $users = User::where('request_admin_role', '1')->get();

        $user_data = User::find($user);
        $user_data->request_admin_role = false;
        $user->assignRole('admin');
        $user->removeRole('user');
        $user_data->save();

        return redirect()->route('admin');
    }
}
