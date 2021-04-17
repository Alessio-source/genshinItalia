<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable = [
        "user_id",
        "title",
        "text",
        "img_path"
    ];

    function user() {
        return $this->belongsTo('App\User');
    }
}
