<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;

class GoAdmin extends Controller
{

//Active user gets admin role

    public function make_admin(){
        $user = Auth::user();
        $user->assignRole('admin');
    }

//Active user loose admin role
    public function remove_admin(){
        $user = Auth::user();
        $user->removeRole('admin');
    }
}
