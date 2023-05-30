<?php

namespace App\Http\Controllers;

use App\Models\Marin;
use App\Models\situation;
use Illuminate\Http\Request;

class situationController extends Controller
{
    public function create(){
        return view('/situation');
    }

    public function store(){

        $attributes = request()->validate([
             'marin'=>['required','string', 'exists:Marins,Nom'],
             'date_debut'=>['required','date'],
             'date_fin'=>['required','date'],
             'situation'=>['required',],
        
          
         ]);

         $marin = Marin::where('Nom', $attributes['marin'])->firstOrFail();
    


        $situation = new situation($attributes);
        $situation->user_id = auth()->id();
        $situation->marin_id = $marin->id;
        $situation->save();

        return redirect('/');
        }
}

