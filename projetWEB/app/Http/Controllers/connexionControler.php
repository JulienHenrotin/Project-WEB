<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class connexionControler extends Controller
{
    public function formulaire()
    {
        return view ('login');
    }
//===========================================================
    public function traitement2 ()
    {

    }
 //==============================================================

    public function traitement()
    {

         /*request()->validate([
            'mail'=>['required','email' ],
            'password'=>['required'],
        ]);*/

        /*$resultat = auth()->attempt([
            'mail'=>request('mail'),
            'password'=>request('password'),
        ]);*/
        $mailentre = request('mail');
        $MDPentre = request('password');
        $MDPbase = DB::table('utilisateurs')->whereRaw('mail = ?',$mailentre);


        if ($MDPentre == $MDPbase)
        {
            dd(var_dump("ca marche") );
            $prenom =DB::select('SELECT prenom FROM utilisateurs WHERE mail=? ',[$mailentre]);
            $id_user = DB::select('SELECT prenom FROM utilisateurs WHERE mail=? ',[$mailentre]);
            $id_statut = DB::select('SELECT id_statut FROM utilisateurs WHERE mail=? ',[$mailentre]);
            session::put('utilisateur.prenom', $prenom );
            session::put('utilisateur.id_User', $id_user );
            session::put('utilisateur.id_statut', $id_statut );
            return redirect('/index');
        }
        else
        {
        {
            return back()->withInput()->withErrors([
                'email'=>'Vos identifiants sont pas juste'
            ]);
        }
    }
}}
