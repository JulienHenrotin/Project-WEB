<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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

return redirect ('ideabox');

    }

    public function ideeprec()

    {
          $boite_a_idee = \App\boite_a_idee::all();
            //dd(dump($boite_a_idee));

          return view ('ideabox',[

          'boite_a_idee' => $boite_a_idee,

          ]);

    }



}