<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marin;

class situation extends Model
{
    use HasFactory;

    protected $fillable = [
        'marin_id',
        'date_debut',
        'date_fin',

    ];

    public function Marin(){
        return $this->belongsTO(Marin::class);
    }
}
