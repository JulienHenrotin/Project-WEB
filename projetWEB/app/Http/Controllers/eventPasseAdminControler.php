<?php

namespace App\Http\Controllers;

use App\evenements;
use Illuminate\Http\Request;

class eventPasseAdminControler extends Controller
{
    function affichage()
    {
        $event = \App\evenements::all();
        return view("/eventAdminPasse" , [
            'event'=>$event,
        ]);
    }
};
