<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    public function getTitleAttribute($value){
        return strtoupper($value);
    }
}
