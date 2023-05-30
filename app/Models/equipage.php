<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marin;
use App\Models\navire;

class equipage extends Model
{
    use HasFactory;
    public function Marin(){
        return $this->hasOne(Marin::class);
    }

    public function navire(){
        return $this->hasOne(navire::class);
    }

    protected $fillable = [
        'date_debut_membre',
        'date_fin_membre',
        'marin_id',
        'navire_id',


    ];


}
