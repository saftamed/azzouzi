<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    public function save(Request $req)
    {
        if (!empty($req["id"])) {
            $e = Element::find($req["id"]);
        }else{
            $e = new Element();
        }

        $e->name = $req["name"];
        $e->qte = $req["qte"];
        $e->disc = $req["disc"];

        $e->save();
       $el =  Element::orderBy('created_at', 'desc')->take(10)->get();
        return response()->json($el);
    }
    
    public function delete(Request $req)
    {
        if (!empty($req["id"])) {
            $e = Element::find($req["id"]);
            $e->delete();

            $el =  Element::orderBy('created_at', 'desc')->take(10)->get();
            return response()->json($el);
        }
    }

    public function search(Request $req) 
    {
      $els =  Element::where("name","LIKE","%". $req["se"]."%")->get();
        return response()->json($els);
    }

    public function all(Request $req)
    {
        $els =  Element::all();
        return response()->json($els);
    }

    public function printM(Request $req)
    {
        $els =     [
                [
                "disc" =>"lorm safta jhdh uchdcc oihmoe iuhi kmoko piioh utfytf ppo oi poojp opoip pop pkddpv ^kkdvvpke ^^pel dyugs sc599 ssa6975+ 6521113c e liueggbie ziudlei eklblief ;eiugueu iideieo elubede eluiehe eomudiuemf",
                "created_at" =>"2021-11-29T11:14:21.000000Z"
                ],[
                "disc" =>"lorm med jhdh uchdcc oihmoe iuhie liueggbie ziudlei eklblief ;eiugueu iideieo elubede eluiehe eomudiuemf",
                "created_at" =>"2021-11-29T11:14:21.000000Z"
                ]
            ] ;

        return response()->json($els);
    }

  
}