<?php

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

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::get('/', function () {
    return view('register/welcome');
});

Auth::routes();
Route::get('logout', function(){
	Auth::logout();
	return redirect('/');
});
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/term', 'HomeController@term')->name('term');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/profile/{id}/update', 'HomeController@updateProfile')->name('profile-update');
Route::get('/account', 'HomeController@account')->name('account');
Route::post('/account/{id}/update', 'HomeController@updateAccount')->name('account-update');
Route::get('/your-name', 'HomeController@yourName')->name('your-name');
Route::get('/invite-all', 'HomeController@inviteAll')->name('invite-all');
Route::get('/invite-elite', 'HomeController@inviteElite')->name('invite-elite');
