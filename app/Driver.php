<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{

    public function vehicules(){
        return $this->hasMany('App\Vehicule');
    }

    public function clients(){
        return $this->belongsToMany('App\Client');
    }


}
