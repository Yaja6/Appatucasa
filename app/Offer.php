<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable=['description'];

    public function products(){
        return $this->hasMany('App\Product');
    }
}
