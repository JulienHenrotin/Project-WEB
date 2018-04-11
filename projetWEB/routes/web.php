<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', 'inscriptionControleur@formulaire');
Route::post('/inscription', 'inscriptionControleur@traitement');

Route::post('/connexion','connexionControleur@traitement');
Route::get('/connexion','connexionControleur@formulaire');