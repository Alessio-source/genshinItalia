<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artefacts extends Model
{
    protected $fillable = [
        'name',
        'quantity'
    ];

    public function Characters(){
        return $this->belongsToMany('App\Characters');
    }
}
