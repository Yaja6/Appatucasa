<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable=['name','location'];
    public function products(){
        return $this->hasMany('App\Product');
    }

    public function sales(){
        return $this->hasMany('App\Sale');
    }
    /*public function user()
    {
        return $this->belongsTo('App\User');
    }*/
}
