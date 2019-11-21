<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $fillable = ['name','type','size','matricule'];


    public function driver(){
        return $this->belongsTo('App\Driver','driver_id');
    }
}
