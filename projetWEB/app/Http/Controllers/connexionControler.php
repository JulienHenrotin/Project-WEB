<?php

namespace App\Http\Controllers;
use App\utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $MDPbase = utilisateurs::where('mail', $mailentre)->get()[0];
        //dd(var_dump($MDPbase->MDP));
        //return view('/index');
        //dd(dump($MDPbase->attributes['MDP']));
        if ($MDPentre == $MDPbase->MDP)
        {
            //dd(dump($MDPbase["MDP"]));
            //Session::flush();
            //return redirect('/index');
            //dd(var_dump($MDPbase));
            $prenom =utilisateurs::select('prenom')->where('mail',$mailentre)->get()[0];
            $id_user = utilisateurs::select('id_user')->where('mail',$mailentre)->get()[0];
            $id_statut = utilisateurs::select('id_statut')->where('mail',$mailentre)->get()[0];
            //on stocke dans la sessions les infos de l'utilisateur
            session::put('utilisateur.prenom', $prenom->prenom );
            session::put('utilisateur.id_User', $id_user->id_user );
            session::put('utilisateur.id_statut', $id_statut->id_statut );
            //dd(dump(session::all()));
            return view('/index');
        }
        else
        {
            return back()->withInput()->withErrors([
                'email'=>'Vos identifiants ne sont pas justes'
            ]);
        }
    }
}
