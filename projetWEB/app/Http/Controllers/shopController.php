<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;



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

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $goodies=DB::table('goodies')->where('title','LIKE','%'.$request->search."%")->get();
            if($goodies)
            {
                foreach ($goodies as $key => $item) {
                    $output.='<tr>'.
                        '<td>'.$item->id_item.'</td>'.
                        '<td>'.$item->nom.'</td>'.
                        '<td>'.$item->description.'</td>'.
                        '<td>'.$item->prix.'</td>'.
                        '</tr>';
                }
                return Response($output);
            }
        }
    }
}

