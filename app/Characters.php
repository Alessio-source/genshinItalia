<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    protected $fillable = [
        "user_id",
        "name",
        "img_path",
        "legendary",
        "type",
        "weapon"
    ];

    public function Weapons(){
        return $this->belongsToMany('App\Weapons');
    }

    public function Artefacts(){
        return $this->belongsToMany('App\Artefacts');
    }
}
