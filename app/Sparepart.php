<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    //
    public $incrementing = false;

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'sellingPrice' => $this->sellingPrice,
            'buyingPrice' => $this->buyingPrice
        ];
    }
}
