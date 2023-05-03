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
        return $this->hasMany(Marin::class);
    }

    public function navire(){
        return $this->belongsTo(navire::class);
    }

    protected $fillable = [
        //'marin_id',
        'navire_id',
        'date_debut_member',
        'date_fin_membre',

    ];


}
