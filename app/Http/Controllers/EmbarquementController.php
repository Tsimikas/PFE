<?php

namespace App\Http\Controllers;

use App\Models\bondembarquement;
use App\Models\Marin;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class EmbarquementController extends Controller
{
    public function create(){
        return view('embarquement');
    }


    public function store(){

        $attributes = request()->validate([
            'date_embarquement'=>['required','date'],
             'date_debarquement'=>['required','date'],
             'marin_name'=>['required','string', 'exists:Marins,Matricule'],
         ]);

         $marin = Marin::where('Matricule', $attributes['marin_name'])->firstOrFail();

        $bondembarquement = new bondembarquement($attributes);
        $bondembarquement->user_id = auth()->id();
        $bondembarquement->marin_id = $marin->id;
        $bondembarquement->save();

        return redirect('/');
        }







}



