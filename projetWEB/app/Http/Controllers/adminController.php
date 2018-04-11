<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function formulaire()
    {
        return view ('admin');
    }

    public function reponse()
    {
        return ("c okauau");
    }
}
