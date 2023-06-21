<?php

namespace App\Http\Controllers;

use App\Models\Marin;
use App\Models\situation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class situationController extends Controller
{
    public function create(Request $request){
        $search = $request->input('search');
      $marins = DB::table('marins')
      ->join('situations', function ($marin) {
          $marin->on('marins.id', '=', 'situations.marin_id')
               ->whereRaw('situations.id = (
                  SELECT MAX(id) FROM situations WHERE marin_id = marins.id
               )')
               ->where('situations.situation', '=', 'conge');
      })
      ->when($search, function ($query, $search) {
        $query->where(function ($subquery) use ($search) {
            $subquery->where('marins.Nom', 'LIKE', '%'.$search.'%')
                     ->orWhere('situations.situation', 'LIKE', '%'.$search.'%')
                     ->orWhere('Prenom', 'like', '%' . $search . '%')
                     ->orWhere('email', 'like', '%' . $search . '%')
                     ->orWhere('Matricule', 'like', '%' . $search . '%')
                     ->orWhere('Date_Naissance', 'like', '%' . $search . '%')
                     ->orWhere('Numero_telephone', 'like', '%' . $search . '%')
                     ->orWhere('Post_travail', 'like', '%' . $search . '%');
        });
    })
      ->get();

     // dd($marins);
  
        
        return view('situation',['marins' => $marins , 'search' => $search
    
    ]);
    }

    
        public function createdispo(){
            return view('situation-dispo');
        }
    
        public function storedispo(){
    
            $attributes = request()->validate([
                 'marin'=>['required','string', 'exists:Marins,Matricule'],
                 'date_debut'=>['required','date'],
                
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


