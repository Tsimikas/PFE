<?php

use Illuminate\Support\Facades\Route;
use App\Models\Marin;
use App\Models\familiarisation;
use App\Models\navire;
//use App\Models\contract;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarinController;
use App\Http\Controllers\EmbarquementController;
use App\Http\Controllers\equipageController;
use App\Http\Controllers\VisiteController;
use App\Http\Controllers\fasiculeController;
use App\Http\Controllers\familiarisationController;
use App\Http\Controllers\situationController;
use App\Http\Controllers\contratController;
use App\Http\Controllers\DebarquementController;
use App\Models\contrat;
use App\Models\Port;
use App\Models\User;

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

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/', function () {
 return view('welcome');
});

Route::get('/liste-marin',[MarinController::class,'search']);

Route::get('/liste-familiarise',function(){
   $familiarisations = familiarisation::all();
   return view('liste-familiarise', ['familiarisations' => $familiarisations]);
});

Route::get('/liste-navires',function(){
   $navires = navire::all();
   return view('liste-navires', ['navires' => $navires]);
});

Route::get('/liste-port',function(){
    $port = Port::all();
    return view('liste-port',['port'=> $port]);
});

Route::get('/liste_bonembarquement',[MarinController::class,'liste_embarquement']);
Route::get('/liste_bondebarquement',[MarinController::class,'liste_debarquement']);


Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[AuthController::class,'create'])->middleware('guest');
Route::post('/login',[AuthController::class,'store'])->middleware('guest');

Route::post('/logout',[AuthController::class,'destroy'])->middleware('auth');

Route::get('/ajoute-marin',[MarinController::class,'create'])
->middleware('admin:gestionnaire,admin,directeur');

Route::post('/ajoute-marin',[MarinController::class,'store'])
->middleware('admin:gestionnaire,admin,directeur');

Route::get('/bondembarquement', [EmbarquementController::class, 'create'])
    ->middleware('admin:gestionnaire,admin,directeur')
    ->name('bondembarquement.create');

Route::post('/bondembarquement', [EmbarquementController::class, 'store'])
    ->middleware('admin:gestionnaire,admin,directeur')
    ->name('bondembarquement.store');

Route::get('/visitemedical',[VisiteController::class,'create'])
->middleware('admin:gestionnaire,admin,directeur')
->name('visitemedical.create');

Route::post('/visitemedical',[VisiteController::class,'store'])
->middleware('admin:gestionnaire,admin,directeur')
->name('visitemedical.store');;


Route::get('/equipage',[equipageController::class,'create'])->middleware('admin:gestionnaire,admin,directeur');
Route::post('/equipage',[equipageController::class,'store'])->middleware('admin:gestionnaire,admin,directeur');



Route::get('/fasicule',[fasiculeController::class,'create'])
->middleware('admin:gestionnaire,admin,directeur')
->name('fasicule.create');
Route::post('/fasicule',[fasiculeController::class,'store'])
->middleware('admin:gestionnaire,admin,directeur')
->name('fasicule.store');

Route::get('/familiarisation',[familiarisationController::class,'create'])->middleware('admin:gestionnaire,admin,directeur');
Route::post('/familiarisation',[familiarisationController::class,'store'])->middleware('admin:gestionnaire,admin,directeur');


Route::get('/situation',[situationController::class,'create'])->middleware('admin:gestionnaire,admin,directeur');
Route::post('/situation',[situationController::class,'store'])->middleware('admin:gestionnaire,admin,directeur');

Route::get('/contrat',[contratController::class,'create'])->middleware('admin:gestionnaire,admin,directeur');
Route::post('/contrat',[contratController::class,'store'])->middleware('admin:gestionnaire,admin,directeur');



Route::get('/document',[EmbarquementController::class,'document'])
->middleware('admin:gestionnaire,admin,directeur')
->name('document');


Route::get('/imprimer-bondebarquement',[DebarquementController::class,'imprimer'])
->middleware('admin:gestionnaire,admin,directeur')
->name('imprimer');



Route::get('/debarquement', [DebarquementController::class, 'create'])
    ->middleware('admin:gestionnaire,admin,directeur')
    ->name('bondebarquement.create');

Route::post('/debarquement', [DebarquementController::class, 'store'])
    ->middleware('admin:gestionnaire,admin,directeur')
    ->name('bondebarquement.store');

    Route::delete('/marin/{id}', [MarinController::class, 'destroy'])->middleware('admin:gestionnaire,admin,directeur');










