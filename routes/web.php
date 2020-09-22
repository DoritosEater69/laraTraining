<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/success', 'HomeController@sendMail')->name('success');

Route::get('/userprofile', 'UserProfile@index')->name('user_profile')->middleware('auth');
Route::get('/userprofile_edit', 'UserProfile@edit')->name('user_profile_edit')->middleware('auth');
Route::post('/userprofile_index', 'UserProfile@update')->name('user_profile_update')->middleware('auth');
Route::get('/user_management', 'UserManagement@index')->name('user_manage')->middleware('auth', 'role:admin');

Route::get('/admin_request', 'AdminRequest@index')->name('admin_req')->middleware('auth', 'role:user');
Route::get('/admin_request_send', 'AdminRequest@send')->name('admin_req_send')->middleware('auth', 'role:user');
Route::get('/admin_panel', 'AdminPanel@index')->name('admin')->middleware('auth', 'role:admin');
Route::get('/admin_request_accept', 'AdminPanel@send')->name('admin_req_accept')->middleware('auth', 'role:admin');
Route::get('/admin_request_accept_single/{user}', 'AdminPanel@single')->name('admin_req_accept_single')->middleware('auth', 'role:admin');


Route::get('user/{user}', 'UserManageActions@show')->name('user_manage.show')->middleware('auth', 'role:admin');
Route::get('user/edit/{user}', 'UserManageActions@edit')->name('user_manage.edit')->middleware('auth', 'role:admin');
Route::post('user/edit/{user}', 'UserManageActions@update')->name('user_manage.update')->middleware('auth', 'role:admin');
Route::get('user/delete/{user}', 'UserManageActions@destroy')->name('user_manage.del')->middleware('auth', 'role:admin');

Route::get('user/create/user', 'UserManageActions@create')->name('user_manage.create')->middleware('auth', 'role:admin');
Route::post('user/store/user', 'UserManageActions@store')->name('user_manage.store')->middleware('auth', 'role:admin');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/blog', 'BlogController@index')->name('blog')->middleware('auth');

