<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enterprice extends Model

{
    use HasFactory;

    public function enterprising (){
        return $this->belongsTo(Enterprising::class);
    }

    public function publish_veture (){
        return $this->belongsTo(Publish_venture::class);
    }

    public function investor (){
        return $this->belongsTo(Investor::class);
    }

    public function create_reviews(){
        return $this->hasMany(Create_review::class);
    }

    

}
