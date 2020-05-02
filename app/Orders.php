<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
   public function client()
    {
        return $this->belongsTo('App\Clients'::class,'clientId');
    }

      protected $fillable = ['clients'];
}
