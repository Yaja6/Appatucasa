<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable=['text','value'];

    public function sale(){
        return $this->belongsTo('App\Sale');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
