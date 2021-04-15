<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapons extends Model
{
    protected $fillable = [
        "name",
        "type",
        "img_path"
    ];

    public function Characters(){
        return $this->belongsToMany('App\Characters');
    }
}
