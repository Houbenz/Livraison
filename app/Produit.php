<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function Client(){
        return $this->belongsTo('App\Client');
    }
}
