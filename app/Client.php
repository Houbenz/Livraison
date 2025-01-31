<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends User
{


    protected $table='users';

    public function drivers(){
        return $this->belongsToMany('App\Driver','livraisons','client_id','driver_id')->withPivot('prix');
    }

    public function produits(){
       return $this->hasMany('App\Produit');
    }

    public function location(){
        return $this->belongsTo('App\Location','location_id');
    }

    protected $fillable=[
        'firstname','lastname','email','password',
    ];
}
