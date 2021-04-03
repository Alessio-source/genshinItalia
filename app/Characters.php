<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    protected $fillable = [
        "user_id",
        "name",
        "img_path"
    ];
}
