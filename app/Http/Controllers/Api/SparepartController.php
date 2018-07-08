<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Sparepart;
use App\Http\Resources\Sparepart as SparepartResource;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $spareparts = Sparepart::paginate(10);
        return SparepartResource::collection($spareparts);
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
        $this->validate(request(), [
            'id' => 'required|unique:spareparts',
            'name' => 'required',
            'type' => 'required',
            'car' => 'required',
            'sellingprice' => 'required',
            'buyingprice' => 'required',
        ]);

        $sparepart = new Sparepart();
        $sparepart->id = request('id');
        $sparepart->name = request('name');
        $sparepart->type = request('type');
        $sparepart->car = request('car');
        $sparepart->sellingprice = request('sellingprice');
        $sparepart->buyingprice = request('buyingprice');
        $sparepart->save();

        return ['message' => 'Sparepart Added'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sparepart = DB::table('spareparts')
        ->where('id', 'like', '%'.$id.'%')
        ->paginate(10);
        return SparepartResource::collection($sparepart);
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
