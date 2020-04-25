<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
   protected $fillable = ['mileage', 'status', 'careerstatus', 'zones_id', 'persons_id'];
}
