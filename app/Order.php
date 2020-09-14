<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['time','quantity','finalprice'];

    public function products(){
        return $this->hasMany('App\Product');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
