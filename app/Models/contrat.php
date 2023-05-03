<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marin;

class contrat extends Model
{
    public function Marin(){
        return $this->belongsTO(Marin::class);
    }

    protected $fillable = [
        'marin_id',
        'date_debut',
        'date_fin',
        'type',

    ];

    use HasFactory;
}
