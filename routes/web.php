<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ElementController;
use App\Models\Element;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TypeController;
use App\Models\Machine;
use App\Models\Maintenance;
use App\Models\Type;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),

    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        "stock" => Element::orderBy('qte', 'Asc')->take(5)->get(),
        "main" => Maintenance::orderBy('updated_at', 'desc')->with("machine")->take(5)->get()
    ]);
})->name('dashboard');



Route::middleware(['auth:sanctum', 'verified'])->get('/w/{id}', function (Request $request, $id) {
    return Inertia::render('Welcome');
})->name('w');



Route::middleware(['auth:sanctum', 'verified'])->get('/stock', function () {
    return Inertia::render('stock', ["elema" => Element::orderBy('created_at', 'desc')->take(10)->get()]);
})->name('stock');




Route::middleware(['auth:sanctum', 'verified'])->post('/stock/save', [ElementController::class,"save"])->name('stocksave');

Route::middleware(['auth:sanctum', 'verified'])->post('/stock/delete', [ElementController::class, "delete"])->name('stockdelete');

Route::middleware(['auth:sanctum', 'verified'])->post('/stock/search', [ElementController::class, "search"])->name('stocksearch');

Route::middleware(['auth:sanctum', 'verified'])->get('/stock/all', [ElementController::class, "all"])->name('stockall');

Route::middleware(['auth:sanctum', 'verified'])->post('/machine/print', [MachineController::class, "printM"])->name('printM');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/data', [DashboardController::class, "index"])->name('dord');






Route::middleware(['auth:sanctum', 'verified'])->get('/types', function () {
    return Inertia::render('Type', ["typesa" => Type::all()]);
})->name('types');


Route::middleware(['auth:sanctum', 'verified'])->get('/types/all', function () {
    return response()->json(Type::all());
})->name('typesAll');

Route::middleware(['auth:sanctum', 'verified'])->get('/types/{id}', function (Request $req, $id) {
    return Inertia::render('TypeDetaille', ["typea" => Type::where("id", $id)->with("machines")->get()[0]]);
})->name('types_detail');

Route::middleware(['auth:sanctum', 'verified'])->get('/test', [TestController::class, "index"])->name('test');

Route::middleware(['auth:sanctum', 'verified'])->post('/type/save', [TypeController::class, "save"])->name('typeSave');

Route::middleware(['auth:sanctum', 'verified'])->post('/type/add', [TypeController::class, "add"])->name('typeAdd');


Route::middleware(['auth:sanctum', 'verified'])->get('/machine/{id}', function (Request $req, $id) {
    return Inertia::render('MachineDetaille', ["machinea" => Machine::where("id", $id)->with("maintenances", "type", "maintenances.elements")->get()[0]]);
})->name('machine_detail');


Route::middleware(['auth:sanctum', 'verified'])->post('/machine/save', [MachineController::class, "save"])->name('MachineSave');


Route::middleware(['auth:sanctum', 'verified'])->post('/maintenance/delete', [MachineController::class, "deleteM"])->name('deleteM');

Route::middleware(['auth:sanctum', 'verified'])->post('/maintenance/addEdit', [MachineController::class, "addEdit"])->name('addEdit');

Route::middleware(['auth:sanctum', 'verified'])->post('/machine/delete', [MachineController::class, "deleteMachine"])->name('deleteMachine');

Route::middleware(['auth:sanctum', 'verified'])->post('/type/delete', [TypeController::class, "deleteType"])->name('deleteType');

Route::middleware(['auth:sanctum', 'verified'])->post('/machine/savenew', [MachineController::class, "savenew"])->name('MachineSavenew');


Route::middleware(['auth:sanctum', 'verified'])->post('/main/search', [MachineController::class, "search"])->name('Machinesearch');
