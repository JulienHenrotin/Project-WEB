<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class shopController extends Controller
{

    function affichage(){

        return view('shop', [

        ]);


    }

    function traitement(){
        return view('shop');
    }


    function affGoodies(){
        $goodies = \App\goodies::all();

        return view('shop', [
           'goodies' => $goodies,
        ]);
    }

}
