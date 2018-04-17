<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\facades\Session;
use App\propose;
use Mockery\Exception;

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
    //dd(var_dump($iduser, $ididee->id_idee));
        $proposeObject = new \App\propose;

        $proposeObject->id_User = $iduser;
        $proposeObject->id_idee = $ididee->id_idee;
        //dd(dump($proposeObject));
        $proposeObject->save();

   // dd(var_dump($ididee->id_idee , $iduser));
//        $iduser = (int) $iduser;
//        $ididee = (int) $ididee;


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