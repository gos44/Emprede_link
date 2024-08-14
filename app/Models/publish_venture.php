<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publish_venture extends Model
{
    use HasFactory;

    public function enterprising (){
        return $this->belongsTo(Enterprising::class);
    }

    public function enterprices (){
        return $this->hasMany(Enterprice::class);
    }






    }

