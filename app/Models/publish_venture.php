<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publish_venture extends Model
{
    use HasFactory;
    public function investors (){
        return $this->hasMany(enterprising::class);
    }
    }

