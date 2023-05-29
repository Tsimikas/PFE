<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\equipage;

class navire extends Model
{
    use HasFactory;
    public function equipage(){
        return $this->hasMany(equipage::class);
    }

    protected $with = ['equipage'];

    protected $fillable = [
        'nom',
        'numero_role',
        'nombre_equipage',


    ];
}
