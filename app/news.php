<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    function user() {
        return $this->belongTo('App\user');
    }
}
