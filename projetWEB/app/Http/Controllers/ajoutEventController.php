<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajoutEventController extends Controller
{
    function formulaire()
    {
        return view("/ajoutEvent");
    }
    function traitement()
    {
        //placement dans la base de donnée
        $event = new \App\evenements();
        $event->descrip_event = request('descrip_event');
        $event->prix_event = request('prix_event');
        $event->dateEvent = request('date');
        $event->photoBDE = request('image');
        $event->save();

        return back();
    }
}
