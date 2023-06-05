<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\bondembarquement;
use App\Models\bondebarquement;
use App\Models\familiarisation;
use App\Models\Marin;
use App\Models\fasicule;
use App\Models\situation;
use App\Models\visitemedical;
use App\Models\contrat;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function bondembarquement(){
        return $this->hasMany(bondembarquement::class);
    }

    public function bondebarquement(){
        return $this->hasMany(bondebarquement::class);
    }

    public function familiarisation(){
        return $this->hasMany(familiarisation::class);
    }

    public function Marin(){
        return $this->hasMany(Marin::class);
    }

    public function situation(){
        return $this->hasMany(situation::class);
    }

    public function fasicule(){
        return $this->hasMany(fasicule::class);
    }

    public function visitemedicale(){
        return $this->hasMany(visitemedical::class);
    }

    public function Port(){
        return $this->hasMany(Port::class);
    }

    public function contrat(){
        return $this->hasMany(contrat::class);
    }




    protected $with = ['familiarisation','bondembarquement','bondebarquement'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Username',
        'password',
        'profil',
    ];










    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'profil' => 'string',
    ];
}
