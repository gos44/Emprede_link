<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enterprising extends Model

{

    public function enterprices(){
        return $this->hasMany(Enterprice::class);
    }

    public function reviews (){
        return $this->hasMany(Review::class);
    }

    public function user_enterprisings (){
        return $this->hasMany(User_enterprising::class);
    }

    public function publish_ventures(){
        return $this->hasMany(publish_venture::class);
    }

    public function User_investors(){
        return $this->hasMany(User_investor::class);
    }

    public function investors(){
        return $this->belongsToMany(Investor::class);
    }
}
