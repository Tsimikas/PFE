<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\familiarisation;
use App\Models\contrat;
use App\Models\bondembarquement;
use App\Models\bondebarquement;
use App\Models\visitemedical;
use App\Models\equipage;
use App\Models\situation;
use App\Models\User;



class Marin extends Model
{
    use HasFactory;

    public function familiarisation(){
        return $this->hasMany(familiarisation::class);
    }

    public function contrat(){
        return $this->hasMany(contrat::class);
    }

    public function bondembarquement(){
        return $this->hasMany(bondembarquement::class);
    }

    public function bondebarquement(){
        return $this->hasMany(bondebarquement::class);
    }

    public function visitemedical(){
        return $this->hasMany(visitemedical::class);
    }

    public function equipage(){
        return $this->hasMany(equipage::class);
    }

    public function situation(){
        return $this->hasOne(situation::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function fasicule(){
        return $this->hasOne(fasicule::class);
    }
    

    protected $with = ['User','situation','equipage','visitemedical', 'bondebarquement',
    'bondembarquement', 'contrat', 'familiarisation','fasicule'];






    protected $fillable = [
        'Nom',
        'Prenom',
        'Matricule',
        'email',
        'Post_travail',
        'Numero_telephone',
        'Date_Naissance',
        'equipage_id',
        'marin_id'

    ];
}
