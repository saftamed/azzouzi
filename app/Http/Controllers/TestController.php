<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\Maintenance;
use App\Models\Type;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $m = Machine::where("id", 1)->with(["maintenances" => function ($query) {
            $query->where('created_at', 'like', "20" . date('y') . "-" . date('m') . "%");
        }])->with("maintenances.elements")->get();
        return $m;
        // $type = new Type();
        // $type->ref = "mmmmmmm";
        // $type->nom = "stm16";
        // $type->fournisseur = "majdi";
        // $type->save();


        // $type = Type::find(1)->with("machines")->get();
        // return $type;


        // $type = Type::find(2);

        // $m = new Machine();
        // $m->numbre = 1;
        // $m->emplacement = "t1";
        // $m->type()->associate($type);

        //  $m->save();

        // $ma= Machine::find(2);

        // $m = new Maintenance();
        // $m->disc = "hhhhhhhhhhhh";
        // $m->machine()->associate($ma);

        // $m->save();

    }
}
