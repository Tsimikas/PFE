<?php

namespace App\Http\Controllers;

use App\Models\Marin;
use App\Models\situation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class situationController extends Controller
{
    public function create(){
        $situations = Situation::where('situation', '=', 'conge')->get();
               


        return view('situation',['situations' => $situations]);
    }

    
        public function createdispo(){
            return view('situation-dispo');
        }
    
        public function storedispo(){
    
            $attributes = request()->validate([
                 'marin'=>['required','string', 'exists:Marins,Matricule'],
                 'date_debut'=>['required','date'],
                 'date_fin'=>['required','date'],
                 'situation'=>['required',],
    
    
             ]);
    
             $marin = Marin::where('Matricule', $attributes['marin'])->firstOrFail();
    
    
    
            $situation = new situation($attributes);
            $situation->user_id = auth()->id();
            $situation->marin_id = $marin->id;
            $situation->save();
    
            return redirect('/');
            }

}


