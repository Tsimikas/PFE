<?php

namespace App\Http\Controllers;

use App\Models\contrat;
use App\Models\Marin;
use Illuminate\Http\Request;

class contratController extends Controller
{
    public function create(){
        return view('/contrat');
    }

    public function store(){

        $attributes = request()->validate([
             'marin'=>['required','string', 'exists:Marins,Matricule'],
             'date_debut'=>['required','date'],
             'date_fin'=>['required_if:type,CDD'],
             'type'=>['in:CDD,CDI','required'],


         ]);

         $marin = Marin::where('Matricule', $attributes['marin'])->firstOrFail();


        $contrat = new contrat($attributes);
        $contrat->user_id = auth()->id();
        $contrat->marin_id = $marin->id;
        $contrat->save();

        return redirect('/')->with('success', ' Contrat has been created');;
        }
}

