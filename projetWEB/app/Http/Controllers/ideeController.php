<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ideeController extends Controller
{
    public function zonetxt()
    {

        return view ('BAI');

    }

    public function validation()
    {

        $idee = new \App\boite_a_idee();
        $idee -> idee= request('textidee');
        $idee -> save();
        return'idée validée!';

    }


}