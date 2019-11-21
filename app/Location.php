<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function clients(){

        return $this->hasMany('App\Client');
    }

    public function drivers(){
        return $this->hasMany('App\Driver');
    }


    protected $fillable=[
        'wilaya','zipcode','ville','address',
    ];
}
