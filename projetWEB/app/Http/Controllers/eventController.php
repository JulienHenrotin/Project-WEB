<?php

namespace App\Http\Controllers;

use App\utilisateurs;
use App\s_inscrit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class eventController extends Controller
{
    function affEvenements(){
        $evenements = \App\evenements::all();

        return view('event', [
            'evenements' => $evenements,
        ]);
    }

    function traitement()
    {
        $event=request('event');
        //$user=Session::all();
        $user =Session::get('utilisateur.id_User');
        //dd(dump($user));
        $inscrit = new  \App\inscrit;
        $inscrit->id_event = $event;
        $inscrit->id_User = $inscrit;
        $inscrit->save();
    }
}
