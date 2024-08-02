<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investor extends Model
{
    public function enterprisings()
    {
        return $this->belongsToMany(enterprising::class);
    }
}
