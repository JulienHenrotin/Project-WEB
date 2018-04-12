<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connexionControler extends Controller
{
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
        if ($resultat)
        {
            return redirect('/index');
        }
        else
        {
            return back()->withInput()->withErrors([
                'email'=>'Vos identifiants'
            ]);
        }
    }
}
