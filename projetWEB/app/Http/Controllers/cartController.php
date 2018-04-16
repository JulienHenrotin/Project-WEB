<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cart;

class cartController extends Controller
{
    function affichage(){
        return view('cart');
    }

    function traitement(){
        return view('cart');
    }

    function recupGoodies(){
        $goodies = \App\goodies::all();

        return view('shop', [
            'goodies' => $goodies,
        ]);
    }



}
