<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class cartController extends Controller
{
    function affichage(){
        return view('cart');
    }

    function traitement(){
        return view('cart');
    }
}
