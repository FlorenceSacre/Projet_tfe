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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('home','HomeController');

Route::resource('video','VideoController');

Route::resource('voyage','VoyageController');

Auth::routes();
//Route::get('/connexion', 'ConnexionController@index')->name('connexion');
Route::get('email', 'EmailController@getForm');
Route::post('email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);

Route::resource('user', 'UserController');

Route::get('/subscribe', function() {
    return view('subscribe.index');
});
Route::post('/subscription', 'SubscriptionController');
Route::get('emails.new-subscribe');

Route::get('/unsubscription/{token}', 'UnsubscriptionController');