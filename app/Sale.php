<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable =['date'];

    public function feedback()
    {
        return $this->hasMany('App\Feedback');
    }
    public function store(){
        return $this->belongsTo('App\Store');
    }
}
