<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;


     public function reserve()
    {
        return $this->hasMany('App\Reserve');
    }
}