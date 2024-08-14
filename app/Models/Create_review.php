<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Create_review extends Model
{
    use HasFactory;
    public function investor (){
        return $this->belongsTo(Investor::class);
    }
    public function enterprice(){
        return $this->belongsTo(Enterprice::class);
    }
}
