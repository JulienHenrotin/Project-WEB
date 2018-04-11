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
            'email'=>['required','email' ],
            'password'=>['required'],
        ]);
        auth()->attempt([
            'mail'=>request('mail'),
            'MDP'=>request('password'),
        ]);
        return 'traitement de la connexion';
    }
}
