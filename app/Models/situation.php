<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marin;
use App\Models\User;

class situation extends Model
{
    use HasFactory;

    protected $fillable = [
        'marin_id',
        'user_id',
        'date_debut',
        'date_fin',
        'situation'

    ];

    public function marin(){
        return $this->belongsTo(Marin::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }


}
