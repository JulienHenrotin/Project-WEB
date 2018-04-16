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

Route::get('/shop', 'shopController@affichage');
Route::post('/shop', 'shopController@traitement');
Route::get('/shop', 'shopController@affGoodies');

Route::get('/ideabox', function() {
    return view('ideabox');
});


Route::get('/contact', function() {
    return view('contact');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function() {
    return view('register');
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

Route::get('/register', 'inscriptionControleur@formulaire');
Route::post('/register', 'inscriptionControleur@traitement');

Route::get('/login','connexionControler@formulaire');
Route::post('/login','connexionControler@traitement');

Route::get('/ideabox', 'ideeController@zonetxt' );
Route::post('/ideabox','ideeController@validation');
Route::get('/ideabox','ideeController@ideeprec');




Route::get('/admin', 'adminController@formulaire');
Route::post('/admin', 'adminController@reponse');

//Route::view('/index', 'index');

Route::get('/ajoutGoodies','ajoutGoodies_controller@formulaire');
Route::post('/ajoutGoodies','ajoutGoodies_controller@traitement');

Route::get('/inscription' , function (){
    return view ('inscription');
});