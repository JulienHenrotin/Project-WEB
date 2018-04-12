<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connexionControler extends Controller
{
    public function reponse()
    {
        return '<H1> vous etes connecté</H1> et vous êtes :♣¦♠/Y♥☺☻♥';
    }

    public function formulaire()
    {
        return view ('connexion');
    }

    public function traitement()
    {
         request()->validate([
            'mail'=>['required','email' ],
            'password'=>['required'],
        ]);
        $resultat = auth()->attempt([
            'mail'=>request('mail'),
            'password'=>request('password'),
        ]);
        var_dump($resultat);
        return 'ca marche';
    }
}
