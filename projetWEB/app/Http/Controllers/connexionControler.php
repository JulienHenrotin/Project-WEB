<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class connexionControler extends Controller
{
    public function formulaire()
    {
        return view ('connexion');
    }
//===========================================================
    public function traitement2 ()
    {

    }
 //==============================================================

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
        if ($resultat)
        {
            return redirect('/index');
        }
        else
        {
            return back()->withInput()->withErrors([
                'email'=>'Vos identifiants sont pas juste'
            ]);
        }
    }
}
