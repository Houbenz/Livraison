<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    public function drivers(){
        return $this->belongsToMany('App\Driver');
    }
}
