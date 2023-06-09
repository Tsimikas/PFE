<?php

namespace App\Http\Controllers;

use App\Models\bondembarquement;
use App\Models\Marin;
use App\Models\Port;
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
         ]);

         $marin = Marin::where('Matricule', $attributes['marin_name'])->firstOrFail();
         $port = Port::where('Nom', $attributes['port'])->firstOrFail();

        $bondembarquement = new bondembarquement($attributes);
        $bondembarquement->user_id = auth()->id();
        $bondembarquement->marin_id = $marin->id;
        $bondembarquement->port_id = $port->id;
        $bondembarquement->save();

        $wilaya_embarquement = $attributes['wilaya_embarquement'];
        $date_embarquement = $attributes['date_embarquement'];
        $navire = $attributes['navire'];

        return redirect()->route('document', [
            'matricule' => $marin->Matricule,
            'wilaya' => $marin->wilaya_de_domicile, 
            'nom' => $marin->Nom,
            'prenom' => $marin->Prenom,
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
            'navire'=> $navire
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
                'today' => session('today')
            ];
        dd($data);
            return view('document', compact('data'));
        }

}



