<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Auth;

class UserManagement extends Controller
{
    public function index(){
        $users = User::all();

        return view('userlist', ['users' => $users]);
    }

}
