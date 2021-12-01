<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\Maintenance;
use App\Models\Type;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function savenew(Request $req)
    {
        $type = Type::find($req["type"])->with("machines")->get()[0];

        $m = new Machine();
        $m->numbre = $req["numbre"];
        $m->emplacement = $req["emplacement"];
        $m->type()->associate($type);

        $m->save();
        $type = Type::find($req["type"])->with("machines")->get()[0];
        return response()->json($type);
    }
    public function save(Request $req)
    {
        $m = Machine::find($req["id"])->with("maintenances")->get()[0];
        if ($m != null) {
            $type = Type::find($req["type_id"]);
            $m->numbre = $req["numbre"];
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
        if (isset($req["id"])) {
            $m = Maintenance::find($req["id"]);
        } else {
            $m = new Maintenance();
        }
        $ma = Machine::find($req["machine_id"]);
        $m->disc = $req["disc"];
        $m->machine()->associate($ma);
        $m->save();


        return response()->json($ma->maintenances);
    }

    public function deleteMachine(Request $req)
    {
        $ma = Machine::find($req["id"]);
        $ma->maintenances()->delete();
        $ma->delete();
        return $req["id"];
    }
}
