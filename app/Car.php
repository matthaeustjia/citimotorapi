<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    public $incrementing = false;
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
