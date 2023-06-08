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
        return $this->hasMany(situation::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function fasicule(){
        return $this->hasMany(fasicule::class);
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
        'marin_id',
        'wilaya_de_naissance',
        'wilaya_de_domicile',
        'adress'

    ];

    public function scopeFilter($query, array $filters)
{
    $query->when($filters['search'] ?? false, fn ($query, $search) =>
        $query->where(fn($query)=>
            $query->where('Nom', 'like', '%' . $search . '%')
            ->orWhere('Prenom', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('Matricule', 'like', '%' . $search . '%')
            ->orWhere('Date_Naissance', 'like', '%' . $search . '%')
            ->orWhere('Numero_telephone', 'like', '%' . $search . '%')
            ->orWhere('Post_travail', 'like', '%' . $search . '%')
        )
    );

    $query->when($filters['situation'] ?? false, fn ($query, $situation) =>
        $query->whereHas('situation', fn ($query) => // whereHas ref situations table
            $query->where('situation', $situation)
        )
    );
}
}
