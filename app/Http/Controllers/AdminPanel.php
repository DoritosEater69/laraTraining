<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class AdminPanel extends Controller
{
    public function index(){
        $users = User::where('request_admin_role', '1')->get();

        return view('admin.requests', compact('users'));
    }

    public function send(){
        $users = User::where('request_admin_role', '1')->get();

        $users->each(function($user) {
            $user->assignRole('admin');
            $user->removeRole('user');
            $user->request_admin_role = false;
            $user->save();
        });

        return view('admin.success', compact('users'));
    }
}
