<?php

namespace App\Http\Controllers;

use App\Models\Element;
use App\Models\Machine;
use App\Models\Maintenance;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MachineController extends Controller
{
    public function savenew(Request $req)
    {

        $m = new Machine();
        $m->numbre = $req["numbre"];
        $m->emplacement = $req["emplacement"];
        $m->disc = $req["disc"];
        $m->type_id = $req["type"];

        $m->save();
        $type = Type::where("id", $req["type"])->with("machines")->get()[0];
        return response()->json($type);
    }
    public function save(Request $req)
    {
        //mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
        $m = Machine::where("id", $req["id"])->with("maintenances", "maintenances.elements")->get()[0];
        if ($m != null) {
            $type = Type::find($req["type_id"]);
            $m->numbre = $req["numbre"];
            $m->disc = $req["disc"];
            $m->emplacement = $req["emplacement"];
            $m->type()->associate($type);

            $m->save();

            return response()->json($m);
        }
    }

    public function deleteM(Request $req)
    {
        $ma = Maintenance::find($req["id"]);
        $ma->delete();
        return $req["id"];
    }

    public function addEdit(Request $req)
    {
        $a = [];
        foreach ($req["elements"] as $key => $e) {
           $a[$key]=[
                "qte"=>$e["qte"]
           ];
        }
      
  //Cart::whereIn('id', $ids)->update($request->all());

        if (isset($req["id"])) {
            $m = Maintenance::find($req["id"]);
        } else {
            $m = new Maintenance();
            $m->machine_id = $req["machine_id"];
            $m->disc = $req["disc"];
            $m->save();
        }

        $m->disc = $req["disc"];
        $kk=$m->elements()->sync($a);

        foreach ($kk["attached"] as $key => $k) {
           DB::table("elements")->where("id","=",$k)->decrement("qte", intval( $req["elements"][strval($k)]["qte"]));
        }
        foreach ($kk["detached"] as $key => $k) {
            DB::table("elements")->where("id", "=", $k)->increment("qte", intval($req["d"][strval($k)]["qte"]));
        }
        foreach ($kk["updated"] as $key => $k) {
            $eee = Element::find($k);
            $eee->qte = $eee->qte + $req["elements"][strval($k)]["lqte"]- $req["elements"][strval($k)]["qte"];
            $eee->save();
        }
        // return $kk;
        // $m->save();
        
        $ma = Machine::where("id", $req["machine_id"])->with("maintenances", "type", "maintenances.elements")->get()[0];
        return response()->json($ma->maintenances);
    }

    public function deleteMachine(Request $req)
    {
        $ma = Machine::find($req["id"]);
        $ma->maintenances()->delete();
        $ma->delete();
        return $req["id"];
    }
    public function search(Request $req)
    {
        $els =  Maintenance::where("machine_id", $req["id"])->where("disc", "LIKE", "%" . $req["se"] . "%")->with("elements")->get();
        return response()->json($els);
    }
    public function printM(Request $req)
    {
        $m = Machine::where("id", $req["id"])->with(["maintenances" => function ($query)use ($req)  {
            $query->where('created_at', 'like', $req["y"] . "-" . $req["m"]  . "%");
        }, "maintenances.elements"])->get()[0];
        return response()->json($m);
    }
    
    
}
