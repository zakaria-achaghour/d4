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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get','post'],'/','AdminController@login')->name('login');

Route::get('/logout','AdminController@logout')->name('logout');

Route::get('/admin/dashboard','AdminController@dash')->name('dash');

// update profile
Route::get('/admin/dashboard/edit-profile','AdminController@edit_profile')->name('edit-profile');
Route::put('/admin/dashboard/edit-profile','AdminController@profile_edit')->name('profile_edit');

// settings profile
Route::get('/admin/dashboard/settings','AdminController@settings_get')->name('settings_get');
Route::put('/admin/dashboard/settings','AdminController@settings')->name('settings');

Route::post('/admin/dashboard/check-pwd','AdminController@checkPassword')->name('checkPassword');

Route::resource('/admin/dashboard/users','UserController')->except('destroy')->middleware(['can:admin.manage']);
Route::post('/admin/dashboard/users/delete','UserController@destroy')->name('users.destroy')->middleware(['can:admin.manage']);



//Auth::routes();
