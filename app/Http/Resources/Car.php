<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Car extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'customerid' => $this->customer_id,
            'customer name' => $this->customer->name,
            'VIN' => $this->VIN,
            'carbrand' => $this->carbrand,
            'carmodel' => $this->carmodel,
            'fueltype' => $this->fueltype,
            
        ];
    }
}
