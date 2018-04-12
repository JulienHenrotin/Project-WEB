<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class adminController extends Controller
{
    public function formulaire()
    {
        return view ('admin');
    }

    public function reponse()
    {
        if(Input::get('Evenements'))
        {
            return redirect('/eventAdmin');
        }
        if(Input::get('ajouterGoodies'))
        {
            return redirect('/ajoutGoodies');
        }
        if(Input::get('ajouterEvent'))
        {
            return redirect('/ajouterEvent');
        }
        if(Input::get('BAI'))
        {
            return redirect('/BAI');
        }
    }
}
