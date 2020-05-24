<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infraction extends Model
{
    protected $fillable = ['infractions', 'price', 'drivers_id'];
}
