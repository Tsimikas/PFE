<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\bondembarquement;
use App\Models\bondebarquement;
use App\Models\User;


class Port extends Model
{
    use HasFactory;

    public function bondembarquement(){
        return $this->hasMany(bondembarquement::class);
    }

    public function bondebarquement(){
        return $this->hasMany(bondebarquement::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

}
