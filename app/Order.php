<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'Orders';
    protected $fillable = ['price', 'distance', 'origin','destination','status'];
}
