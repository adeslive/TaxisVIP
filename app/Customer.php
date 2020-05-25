<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'customers';

    public function person() {
        return $this->belongsTo('App\User', 'users_id', 'id');
    }
}
