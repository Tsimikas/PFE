<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marin;
use App\Models\User;


class familiarisation extends Model
{
    use HasFactory;
    public function Marin(){
        return $this->belongsTO(Marin::class);
    }

    public function User(){
        return $this->belongsTO(User::class);
    }


    protected $fillable = [
        'marin_id',
        'post_actuel',
        'nouveau_post',
        'cas_familiarisation',
        'user_id'

    ];

}
