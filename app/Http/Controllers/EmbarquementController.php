<?php

namespace App\Http\Controllers;

use App\Models\bondebarquement;
use App\Models\bondembarquement;
use App\Models\familiarisation;
use App\Models\Marin;
use App\Models\navire;
use App\Models\Port;
use App\Models\situation;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use  Carbon\Carbon;


class EmbarquementController extends Controller
{
    public function create(){
        return view('embarquement');
    }


        public function store(){
            $today = Carbon::now();
    
            $attributes = request()->validate([
                'date_embarquement'=>['required','date'],
                 'wilaya_embarquement'=>['required'],
                 'port'=>['required','string', 'exists:Ports,Nom'],
                 'numero'=>['required'],
                 'marin_name'=>['required','string', 'exists:Marins,Matricule'],
                 'navire'=>['required','string', 'exists:navires,nom'],
                 'post_actuel'=>['required','string'],
                 'nouveau_post'=>['required','string'],
                  'cas_familiarisation'=>['required','string'],
                 
             ]);
    
             $marin = Marin::where('Matricule', $attributes['marin_name'])->firstOrFail();
             $port = Port::where('Nom', $attributes['port'])->firstOrFail();
             $navire = navire::where('nom',$attributes['navire'])->firstOrFail();

             $date_embarquement = $attributes['date_embarquement'];
             
    
             $bondembarquement = new bondembarquement($attributes);
             $familiarisation = new familiarisation($attributes);
             $situation = new situation($attributes);


             $bondembarquement->user_id = auth()->id();
             $bondembarquement->marin_id = $marin->id;
             $bondembarquement->port_id = $port->id;

             $familiarisation->user_id = auth()->id();
             $familiarisation->marin_id = $marin->id;

             $situation->user_id = auth()->id();
             $situation->marin_id = $marin->id;
             $situation->situation = 'embarquer';
             $situation->date_debut = $date_embarquement;
            




             $wilaya_embarquement = $attributes['wilaya_embarquement'];
            
           // // $navire = $attributes['navire'];
             $port = $attributes['port'];
             
             $bondembarquement->save();
             $familiarisation->save();
             $situation->save();


            return redirect()->route('document', [
                'matricule' => $marin->Matricule,
                'wilaya' => $marin->wilaya_de_domicile, 
                'nom' => $marin->Nom,
                'prenom' => $marin->Prenom,
                'wilaya_de_domicile' => $marin->wilaya_de_domicile,
                'date_naissance'=>$marin->Date_Naissance,
                'lieu_naissance' => $marin->wilaya_de_naissance,
                'numero_fasicule' => optional($marin->fasicule->last())->numero,
                'debut_fasicule' => optional($marin->fasicule->last())->date_debut,
                'fin_fasicule' => optional($marin->fasicule->last())->date_expriration,
                'post_marin' => $marin->Post_travail,
                'date_visite' => optional($marin->visitemedical->last())->date_visite,
                'fin_visite' => optional($marin->visitemedical->last())->date_fin,
                'wilaya_embarquement' => $wilaya_embarquement,
                'date_embarquement' => $date_embarquement,
                'port'=> $port,
                'navire'=> $navire->nom,
                'numero_role'=> $navire->numero_de_role,
                ])->with('today',$today);
    
            }
    

       

        public function document(Request $request)
        {
            $data = [
                'matricule' => $request->matricule,
                'wilaya' => $request->wilaya,
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'date_naissance'=>$request->date_naissance,
                'lieu_naissance' => $request->lieu_naissance,
                'numero_fasicule' => $request->numero_fasicule,
                'debut_fasicule' => $request->debut_fasicule,
                'fin_fasicule' => $request->fin_fasicule,
                'post_marin' => $request->post_marin,
                'date_visite' => $request->date_visite,
                'fin_visite' => $request->fin_visite,
                'wilaya_embarquement' => $request->wilaya_embarquement,
                'date_embarquement' => $request->date_embarquement,
                'navire' => $request->navire,
                'wilaya_de_domicile' => $request->wilaya_de_domicile,
                'port'=>$request->port,
               'numero_role'=> $request->numero_role,
                'today' => session('today')
            ];
        //dd($data);
            return view('document', compact('data'));
        }

}



