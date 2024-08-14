<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    public function enterprising (){
        return $this->belongsTo(Enterprising::class);
    }

    public function investor (){
        return $this->belongsTo(Investor::class);
    }
}
