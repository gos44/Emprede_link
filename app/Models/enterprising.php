<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enterprising extends Model

{
    public function Investors()
    {
        return $this->belongsToMany(Investor::class);
    }

    public function publish_venture (){
        return $this->belongsTo(publish_venture::class);
    }
}
