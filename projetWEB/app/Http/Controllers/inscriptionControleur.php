<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inscriptionControleur extends Controller
{
    public function formulaire()
    {
        return view('register');
    }

    public function traitement()
    {
        request()->validate([
            'prenom' =>['required'],
            'nom' =>['required'],
            'mail'=>['email','required'],
            'password'=>['required','confirmed'],
            'password_confirmation'=>['required'],
        ]);
        //placement dans la base de donnée
        $utilisateurs = new \App\utilisateurs();
        $utilisateurs->prenom = request('prenom');
        $utilisateurs->nom = request('nom');
        $utilisateurs->mail = request('mail');
        $utilisateurs->MDP = request('password');
        $utilisateurs->id_statut ='1';
        $utilisateurs->save();
        return view('/index');
    }
}
