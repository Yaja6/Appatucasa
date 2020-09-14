<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    protected $fillable=['name','lastname','email','phone'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
