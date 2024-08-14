<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_enterprising extends Model
{
    use HasFactory;

    public function investor(){
        return $this->belongsTo(Investor::class);
    }

    public function enterprising (){
        return $this->belongsTo(Enterprising::class);
    }
}
