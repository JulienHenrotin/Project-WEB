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
            echo "event";
        }
        if(Input::get('ajouterGoodies'))
        {
            //echo "ajouter Goodies";
            header('Location : C:\wamp64\www\projetWEB\Project-WEB\projetWEB\resources\views\index.blade.php ');
        }
        if(Input::get('ajouterEvent'))
        {
            echo "ajouter event";
        }
        if(Input::get('BAI'))
        {
            echo "boite a idée de Nicolas";
        }
    }
}
