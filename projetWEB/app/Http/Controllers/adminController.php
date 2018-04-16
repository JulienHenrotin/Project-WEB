<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class adminController extends Controller
{
    public function formulaire()
    {
        return view ('admin');
    }

    public function reponse()
    {
        if(Input::get('evenementsPasse'))
        {
            return redirect('eventAdminPasse');
        }
        if(Input::get('Evenementsfutures'))
        {
            return view('/eventAdminFuture');
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
