<?php

use Illuminate\Support\Facades\Route;
use App\Models\Marin;
use App\Models\familiarisation;
use App\Models\navire;
//use App\Models\contract;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarinController;
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

Route::get('/liste-marin',function(){
   $marins = Marin::all();
   return view('liste-marin', ['marins' => $marins]);
});

Route::get('/liste-familiarise',function(){
   $familiarisations = familiarisation::all();
   return view('liste-familiarise', ['familiarisations' => $familiarisations]);
});

Route::get('/liste-navires',function(){
   $navires = navire::all();
   return view('liste-navires', ['navires' => $navires]);
});

Route::get('/register',[RegisterController::class,'create'])->middleware('admin:admin,directeur');
Route::post('/register',[RegisterController::class,'store'])->middleware('admin:admin,directeur');

Route::get('/login',[AuthController::class,'create'])->middleware('guest');
Route::post('/login',[AuthController::class,'store'])->middleware('guest');

Route::post('/logout',[AuthController::class,'destroy'])->middleware('auth');

Route::get('/ajoute-marin',[MarinController::class,'create'])->middleware('admin:gestionnaire,admin');
Route::post('/ajoute-marin',[MarinController::class,'store'])->middleware('admin:gestionnaire,admin');






