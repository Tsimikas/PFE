<?php

namespace App\Http\Controllers;

use App\Models\bondembarquement;
use App\Models\Marin;
use App\Models\Port;
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
             'wilaya_embarquement'=>['required'],
             'port'=>['required','string', 'exists:Ports,Nom'],
             'numero'=>['required'],
             'marin_name'=>['required','string', 'exists:Marins,Matricule'],
         ]);

         $marin = Marin::where('Matricule', $attributes['marin_name'])->firstOrFail();
         $port = Port::where('Nom', $attributes['port'])->firstOrFail();

        $bondembarquement = new bondembarquement($attributes);
        $bondembarquement->user_id = auth()->id();
        $bondembarquement->marin_id = $marin->id;
        $bondembarquement->port_id = $port->id;
        $bondembarquement->save();

        return redirect('/')->with('success', 'BON DEMBARQUEMENT CREE.');
        }
}



