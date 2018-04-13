<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\utilisateurs;

class ajoutGoodies_controller extends Controller
{
    public function formulaire()
    {

        return view ('ajoutGoodies');
    }

    public function traitement()
    {
        request()->validate([
            'nom' => ['required'],
            'prix' => ['required'],
            'description' => ['required'],
        ]);
        //placement dans la base de donnée
        $goodies = new \App\goodies();
        $goodies->nom = request('nom');
        $goodies->prix = request('prix');
        $goodies->description = request('description');
        $goodies->id_categorie = request('categorie');
        $goodies->save();


        /*echo '<script language="javascript">';
        echo 'alert("Le Goodies a bien été ajouté")';
        echo '</script>';*/
        return back();
    }
}