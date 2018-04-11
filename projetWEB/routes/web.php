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



Route::get('/inscription', 'inscriptionControleur@formulaire');
Route::post('/inscription', 'inscriptionControleur@traitement');

Route::post('/connexion','connexionControleur@traitement');
Route::get('/connexion','connexionControleur@formulaire');

Route::get('/BAI', 'ideeController@zonetxt' );
Route::post('/BAI','ideeController@validation');