<?php

namespace App\Http\Controllers;
use App\utilisateurs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class connexionControler extends Controller
{
    public function formulaire()
    {
        return view ('login');
    }

    public function traitement()
    {

        $mailentre = request('mail');
        $MDPentre = request('password');
        $MDPbase = utilisateurs::select('MDP')->where('mail', $mailentre)->get();

        if ($MDPentre == $MDPbase)
        {
            dd(var_dump($MDPbase));
            $prenom =utilisateurs::select('prenom')->where('mail',$mailentre);
            $id_user = utilisateurs::select('id_user')->where('mail',$mailentre);
            $id_statut = utilisateurs::select('id_statut')->where('mail',$mailentre);
            //on stocke dans la sessions les infos de l'utilisateur
            session::put('utilisateur.prenom', $prenom );
            session::put('utilisateur.id_User', $id_user );
            session::put('utilisateur.id_statut', $id_statut );
            return redirect('/index');
        }
        else
        {
        {
            return back()->withInput()->withErrors([
                'email'=>'Vos identifiants ne sont pas justes'
            ]);
        }
    }
}}
