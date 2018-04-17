<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\facades\Session;
use App\propose;

class ideeController extends Controller
{
    public function zonetxt()
    {
        return view ('ideabox');
    }

    public function validation()
    {

    $idee = new \App\boite_a_idee();

    $idee -> idee= request('textidee');

    $idee -> save();

    $iduser = Session::get('utilisateur.id_User');

    $ididee = \App\boite_a_idee::orderBy('id_idee','DESC')->get()[0];


    dd(dump($iduser));

    $proposeObject = new \App\propose;
    $proposeObject->id_User = $iduser;
    $proposeObject->id_idee = $ididee;
    $proposeObject->save();


return redirect ('ideabox');

    }

    public function ideeprec()

    {
          $boite_a_idee = \App\boite_a_idee::all();

          return view ('ideabox',[

          'boite_a_idee' => $boite_a_idee,


          ]);

    }



}