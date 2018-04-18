<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use App\commandes;
use App\goodies;
use Illuminate\Support\Facades\DB;



class shopController extends Controller
{

    function affichage()
    {

        return view('shop', [

        ]);


    }

    function traitement()
    {
        $items = request('achat');
        $user = Session::get('utilisateur.id_User');
        $commamndeUSER = commandes::where('id_User', $user)->get();

        $recherche = commandes::where('id_User',$user)->where('id_items',$items)->get()[0];
        //dd(dump($recherche));
        if($recherche->isNotEmpty())
        {
            $plusun = $recherche->quantite + 1;
            //dd(dump($plusun));
            //commande::find($user && $items)->update(['quantite' => $plusun]);
            //DB::update('update commande  set quantite = ? where id_items=? and id_User=?',[$plusun,$items,$user]);
            commandes::where('id_items', '=', $items -> where('id_User', '=', $user)->update(['quantite' => $plusun]));
        }
        else {
            $cart = new  \App\commandes;
            $cart->id_user = $user;
            $cart->id_items = $items;
            $cart->quantite = 1;
            $cart->save();
            //dd(dump($items, $user, $cart));
            return redirect('shop');
        }
    }





    function affGoodies()
    {
        $goodies = \App\goodies::all();

        return view('shop', [
            'goodies' => $goodies,
        ]);
    }
}

//    public function search(Request $request)
//    {
//        if($request->ajax())
//        {
//            $output="";
//            $goodies=DB::table('goodies')->where('title','LIKE','%'.$request->search."%")->get();
//            if($goodies)
//            {
//                foreach ($goodies as $key => $item) {
//                    $output.='<tr>'.
//                        '<td>'.$item->id_item.'</td>'.
//                        '<td>'.$item->nom.'</td>'.
//                        '<td>'.$item->description.'</td>'.
//                        '<td>'.$item->prix.'</td>'.
//                        '</tr>';
//                }
//                return Response($output);
//            }
//        }
//    }
//}

