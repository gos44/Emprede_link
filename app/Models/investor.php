<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investor extends Model
{
    public function user_investors (){
        return $this->hasMany(User_investor::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function user_enterprisings (){
        return $this->hasMany(User_enterprising::class);
    }

    public function create_reviews(){
        return $this->hasMany(Create_review::class);
    }

    public function enterprisings(){
        return $this->belongsToMany(User_investor::class);
    }

}
