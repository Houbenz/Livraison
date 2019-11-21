<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    public function clients(){
        return $this->belongsToMany('App\Client','livraisons','driver_id','client_id')->withPivot('prix');
    }
    public function vehicules(){
        return $this->hasMany('App\Vehicule');
    }

    public function location(){
        return $this->belongsTo('App\Location','location_id');
    }

    protected $fillable=[
        'firstname','lastname','email','password',
    ];

}
