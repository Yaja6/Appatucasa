<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description','price','stock'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function store(){
        return $this->belongsTo('App\Store');
    }
    public function order(){
        return $this->belongsTo('App\Order');
    }
    public function offer(){
        return $this->belongsTo('App\Offer');
    }
}
