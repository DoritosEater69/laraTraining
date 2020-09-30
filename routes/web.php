<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserProfile;
use App\Http\Controllers\UserManagement;
use App\Http\Controllers\AdminRequest;
use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\UserManageActions;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/', function(){
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/success', [HomeController::class, 'sendMail'])->name('success');

Route::get('/userprofile', [UserProfile::class, 'index'])->name('user_profile')->middleware('auth');
Route::get('/userprofile_edit', [UserProfile::class, 'edit'])->name('user_profile_edit')->middleware('auth');
Route::post('/userprofile_index', [UserProfile::class, 'update'])->name('user_profile_update')->middleware('auth');

Route::get('/user_management', [UserManagement::class, 'index'])->name('user_manage')->middleware('auth', 'role:admin');

Route::get('/admin_request_send', [AdminRequest::class, 'send'])->name('admin_req_send')->middleware('auth', 'role:user');
Route::get('/admin_panel', [AdminPanel::class, 'index'])->name('admin')->middleware('auth', 'role:admin');
Route::get('/admin_request_accept', [AdminPanel::class, 'send'])->name('admin_req_accept')->middleware('auth', 'role:admin');
Route::get('/admin_request_accept_single/{user}', [AdminPanel::class, 'single'])->name('admin_req_accept_single')->middleware('auth', 'role:admin');
Route::get('/admin_request_decline', [AdminPanel::class, 'destroy'])->name('admin_req_decline')->middleware('auth', 'role:admin');
Route::get('/admin_request_decline_single/{user}', [AdminPanel::class, 'destroySingle'])->name('admin_req_decline_single')->middleware('auth', 'role:admin');

Route::get('user/{user}', [UserManageActions::class, 'show'])->name('user_manage.show')->middleware('auth', 'role:admin');
Route::get('user/edit/{user}', [UserManageActions::class, 'edit'])->name('user_manage.edit')->middleware('auth', 'role:admin');
Route::post('user/edit/{user}', [UserManageActions::class, 'update'])->name('user_manage.update')->middleware('auth', 'role:admin');
Route::get('user/delete/{user}', [UserManageActions::class, 'destroy'])->name('user_manage.del')->middleware('auth', 'role:admin');

Route::get('user/create/user', [UserManageActions::class, 'create'])->name('user_manage.create')->middleware('auth', 'role:admin');
Route::post('user/store/user', [UserManageActions::class, 'store'])->name('user_manage.store')->middleware('auth', 'role:admin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');;


