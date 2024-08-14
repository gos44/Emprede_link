<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_investor extends Model
{
    use HasFactory;

    public function enterprising (){
        return $this->belongsTo(Enterprising::class);
    }

    public function enterprice (){
        return $this->belongsTo(Enterprice::class);
    }



}
