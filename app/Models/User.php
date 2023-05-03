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

    protected $with = ['familiarisation','bondembarquement','bondebarquement'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Nom',
        'Prenom',
        'Numero_telephone',
        'email',
        'password',
        'profil',
    ];


    public function isAdmin()
    {
        return $this->profil === 'admin';
    }

    public function isEcrivant()
    {
        return $this->profil === 'ecrivant';
    }

    public function isArmement()
    {
        return $this->profil === 'armement';
    }






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
