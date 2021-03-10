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


Route::match(['get','post'],'/','AdminController@login')->name('login');

Route::get('/logout','AdminController@logout')->name('logout');

Route::get('/admin/dashboard','AdminController@dash')->name('dash');

// update profile
Route::match(['get','put'],'/admin/dashboard/edit-profile','AdminController@profile_edit')->name('profile_edit');

// settings profile
Route::match(['get','put'],'/admin/dashboard/settings','AdminController@settings')->name('settings');
// check the user password
Route::post('/admin/dashboard/check-pwd','AdminController@checkPassword')->name('checkPassword');

// users routes
Route::resource('/admin/dashboard/users','UserController')->except('destroy')->middleware(['can:admin.manage']);
Route::post('/admin/dashboard/users/delete','UserController@destroy')->name('users.destroy')->middleware(['can:admin.manage']);



// villles
Route::resource('/admin/dashboard/villes','VilleController')->except('destroy')->middleware(['can:admin.manage']);
Route::post('/admin/dashboard/villes/delete','UserController@destroy')->name('villes.destroy')->middleware(['can:admin.manage']);





// javascripts lang routes 
Route::get('/lang/javascript/{item}',function($item){
    return trans('javascript.'.$item);
});
