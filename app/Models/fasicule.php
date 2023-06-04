<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class fasicule extends Model
{
    use HasFactory;
    public function User(){
        return $this->belongsTO(User::class);
    }

    public function Marin(){
        return $this->BelongsTo(Marin::class);
    }

    protected $fillable = [
        'marin_id',
        'user_id',
        'numero',
        'date_expriration'

    ];

}
