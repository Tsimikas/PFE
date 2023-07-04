<?php

namespace App\Http\Controllers;

use App\Models\familiarisation;
use App\Models\Marin;
use Illuminate\Http\Request;

class familiarisationController extends Controller
{

    public function create(){
        return view('/familiarisation');
    }

    public function store(){

    $attributes = request()->validate([
         'marin'=>['required','string', 'exists:Marins,Matricule'],
         'post_actuel'=>['required','string'],
         'nouveau_post'=>['required','string'],
         'cas_familiarisation'=>['required','string'],

     ]);

     $marin = Marin::where('Matricule', $attributes['marin'])->firstOrFail();

    $familiarisation = new familiarisation($attributes);
    $familiarisation->user_id = auth()->id();
    $familiarisation->marin_id = $marin->id;
    $familiarisation->save();

    return redirect('/')->with('success', 'Marin has been familiarise');;
    }

}
