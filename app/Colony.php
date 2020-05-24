<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colony extends Model
{
    protected $fillable = ['colony', 'zones_id'];
}
