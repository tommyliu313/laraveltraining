<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'name',
        'birthday',
        'area',
        'fix',
        'description',
        'personality',
        'user_id',
    ];
    
    public function type(){
        return $this->belongsTo('App\Models\Type');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function likes(){
        return $this->belongsToMany('App\Models\User', 'animal_user_likes')
            ->withTimestamps();
    }
}
