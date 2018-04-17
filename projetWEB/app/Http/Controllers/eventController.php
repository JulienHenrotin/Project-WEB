<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eventController extends Controller
{
    function affEvenements(){
        $evenements = \App\evenements::all();

        return view('event', [
            'evenements' => $evenements,
        ]);
    }
}
