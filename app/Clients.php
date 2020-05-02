<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
 public function clients()
    {
        return $this->belongsTo('App\Orders'::class);
    }
}
