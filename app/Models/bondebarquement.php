<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marin;
use App\Models\User;
use App\Models\Port;

class bondebarquement extends Model
{
    use HasFactory;
    public function Marin(){
        return $this->belongsTO(Marin::class);
    }

    public function User(){
        return $this->belongsTO(User::class);
    }

    public function Port(){
        return $this->belongsTo(Port::class);
    }




    protected $fillable = [
        'marin_id',
        'date_debarquement',
        'user_id',
        'port_id'

    ];
}
