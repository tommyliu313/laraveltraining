<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function animals(){
        return $this->hasMany('App\Models\Animal', 'type_id','id');
    }
}
