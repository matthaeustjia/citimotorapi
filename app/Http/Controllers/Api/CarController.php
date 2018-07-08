<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\Car as CarResource;
use App\Car;
use App\Customer;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$cars = DB::table('cars')
        //->select('cars.id', 'customerid', 'VIN', 'customers.name', 'carbrand', 'carmodel', 'fueltype')
        //->leftJoin('customers', 'cars.customerid', '=', 'customers.id')
        //->paginate(10);
        $cars = Car::with('customer')->paginate(10);
        return CarResource::collection($cars);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars = Car::with('customer')
        ->where('id', 'like', '%' . $id . '%')
        ->orWhere('name', 'like', '%' . $id . '%')
        ->paginate(10);
        
        return CarResource::collection($cars);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
