<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = ['zones'];

    public function colonies(){
        return $this->hasMany('App\Colony','zones_id');
    }
}
