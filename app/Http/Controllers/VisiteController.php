<?php

namespace App\Http\Controllers;

use App\Models\Marin;
use App\Models\visitemedical;
use Illuminate\Http\Request;

class VisiteController extends Controller
{
    public function create(){
        return view('/visitemedical');
    }
       

    public function store(){

        $attributes = request()->validate([
            'date_visite'=>['required','date'],
             'Duree'=>['required'],
             'marin'=>['required','string', 'exists:Marins,Nom'],
         ]);

         $marin = Marin::where('Nom', $attributes['marin'])->firstOrFail();
       
        $bondembarquement = new visitemedical($attributes);
        $bondembarquement->user_id = auth()->id();
        $bondembarquement->marin_id = $marin->id;
        $bondembarquement->save();

        return redirect('/');
        }


}
