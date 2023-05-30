<?php

namespace App\Http\Controllers;

use App\Models\fasicule;
use App\Models\Marin;
use Illuminate\Http\Request;

class fasiculeController extends Controller
{
    public function create(){
        return view('/fasicule');
    }

    public function store(){

        $attributes = request()->validate([
            'numero'=>['required','numeric'],
             'marin'=>['required','string', 'exists:Marins,Nom'],
          
         ]);

         $marin = Marin::where('Nom', $attributes['marin'])->firstOrFail();


        $fasicule = new fasicule($attributes);
        $fasicule->user_id = auth()->id();
        $fasicule->marin_id = $marin->id;
        $fasicule->save();

        return redirect('/');
        }
}
