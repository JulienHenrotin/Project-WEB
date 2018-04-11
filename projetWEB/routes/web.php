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

Route::get('/index', function () {

    return view('index');
});


Route::get('/event', function() {
    return view('event');
});

Route::get('/shop', function() {
    return view('shop');
});

Route::get('/ideabox', function() {
    return view('ideabox');
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

Route::get('/connexion','connexionControler@formulaire');
Route::post('/connexion','connexionControler@traitement');

Route::get('/BAI', 'ideeController@zonetxt' );
Route::post('/BAI','ideeController@validation');

Route::get('/admin', 'adminController@formulaire');
Route::post('/admin', 'adminController@reponse');