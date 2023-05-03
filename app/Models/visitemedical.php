<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marin;


class visitemedical extends Model
{
    use HasFactory;
    public function Marin(){
        return $this->belongsTO(Marin::class);
    }

    protected $fillable = [
        'marin_id',
        'date_visite',
        'duree',

    ];
}
