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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/success', 'HomeController@sendMail')->name('success');

Route::get('/userprofile', 'UserProfile@index')->name('user_profile')->middleware('auth');
Route::get('/userprofile_edit', 'UserProfile@edit')->name('user_profile_edit')->middleware('auth');
Route::post('/userprofile_index', 'UserProfile@update')->name('user_profile_update')->middleware('auth');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
