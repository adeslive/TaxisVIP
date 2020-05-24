<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
   protected $table = 'drivers';
   protected $fillable = ['mileage', 'status', 'careerstatus', 'zones_id', 'users_id', 'license'];

   public function person() {
      return $this->belongsTo('App\User', 'users_id', 'id');
   }

   public function zone() {
      return $this->hasOne('App\Zone', 'id' , 'zones_id');
   }

   public function cars() {
      return $this->hasMany('App\Vehicle', 'drivers_id');
   }
}
