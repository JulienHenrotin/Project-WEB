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


Route::get('/team', function() {
    return view('team');
});

Route::get('/shop', function() {
    return view('shop');
});

Route::get('/events', function() {
    return view('events');
});


Route::get('/contact', function() {
    return view('contact');
});


Route::get('/experiance', function() {
    return view('experience');
});

Route::get('/company', function() {
    return view('company');
});


Route::get('/bonjour/{nom}', function () {


    return view('bonjour ', [
        'prenom' => request('nom')
    ]);
});


Route::get('/inscription', function(){
    return view('inscription');
});


Route::post('/inscription', function(){

    return "Nous avons reçu votre email qui est " . request('email') . "et votre mot de passe qui est " . request('password');
});

