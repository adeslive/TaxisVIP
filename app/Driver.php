<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
   protected $table = 'drivers';
   protected $fillable = ['mileage', 'status', 'careerstatus', 'zones_id', 'persons_id'];
}
