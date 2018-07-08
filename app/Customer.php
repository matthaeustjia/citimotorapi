<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function car()
    {
        return $this->hasMany(Car::class);
    }
}
