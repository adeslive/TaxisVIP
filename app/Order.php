<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'orders';
    protected $fillable = ['price', 'distance', 'origin','destination','status'];

    public function driver(){
        return $this->hasOne('App\Driver', 'id', 'drivers_id');
    }

    public function customer(){
        return $this->hasOne('App\Customer', 'id', 'customers_id');
    }
}
