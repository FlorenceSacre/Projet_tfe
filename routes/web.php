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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('home', 'HomeController@index')->name('home');

Route::resource('video','VideoController');

Route::resource('voyage','VoyageController');

Auth::routes();

Route::get('email', 'EmailController@getForm');
Route::post('email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);

//Route::get('user', 'UserController@index')->name('user');
//Route::resource('/user', 'UserController');

Route::get('/subscribe', function() {
    return view('subscribe.index');
});
Route::post('/subscription', 'SubscriptionController');
Route::get('emails.new-subscribe');
Route::get('/unsubscription/{token}', 'UnsubscriptionController');

Route::post('login', 'Auth\LoginController@authenticated');
//
//Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
//    Route::get('/user', 'UserController@index')->name('user');
//});

//Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm');

//Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);