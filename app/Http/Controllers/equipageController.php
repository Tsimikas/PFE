<?php

namespace App\Http\Controllers;

use App\Models\equipage;
use App\Models\Marin;
use App\Models\navire;
use Illuminate\Http\Request;

class equipageController extends Controller
{
    public function create(){
        return view('/equipage');
    }

    public function store(){

        $attributes = request()->validate([
            'date_debut_membre'=>['required','date'],
             'date_fin_membre'=>['required','date'],
             'marin'=>['required','string', 'exists:Marins,Matricule'],
             'navire'=>['required','exists:navires,nom']
         ]);

         $marin = Marin::where('Matricule', $attributes['marin'])->firstOrFail();
         $navire = navire::where('nom',$attributes['navire'])->firstOrFail();

        $equipage = new equipage($attributes);
       // $equipage->user_id = auth()->id();
        $equipage->marin_id = $marin->id;
        $equipage->navire_id = $navire->id;
        $equipage->save();

        return redirect('/');
        }
}
