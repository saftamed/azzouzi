<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $req)
    {
        $el =Element::orderBy('updated_at', 'desc')->take(5)->get();
        $el2 = Element::orderBy('updated_at', 'desc')->take(5)->get();
        //$el = Element::orderBy('updated_at', 'desc')->with("machine")->take(5)->get();
        return response()->json([
            "stock" => $el,
            "main" => $el2
        ]);

    }
}
