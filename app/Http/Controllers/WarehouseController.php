<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryWarehouse;
use App\InventoryProductVariety;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouses=InventoryWarehouse::all();
        return view('warehouse.index',compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warehouse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $warehouse=new InventoryWarehouse();
        $warehouse->name=$request->name;
        $warehouse->address=$request->address;
        $warehouse->location=$request->location;
        $warehouse->email=$request->email;
        $warehouse->telephone=$request->telephone;
        $warehouse->save();
        return redirect('/warehouse');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $warehouse=InventoryWarehouse::findOrFail($id);
        $varieties=$warehouse->varieties()->get();
        $name=[];
        $unit=[];
        foreach ($varieties as  $variety){
            $name[$variety->pivot->product_variety_id]=InventoryProductVariety::find($variety->pivot->product_variety_id)
                ->products()->pluck('name');
            $unit[$variety->pivot->product_variety_id]=InventoryProductVariety::find($variety->pivot->product_variety_id)
                ->products()->pluck('default_uom');

        }
        return view('warehouse.show',compact('name','warehouse','varieties','unit'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warehouse=InventoryWarehouse::findOrFail($id);
        return view('warehouse.edit',compact('warehouse'));
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

        $warehouse=InventoryWarehouse::findOrFail($id);
        $warehouse->name=$request->name;
        $warehouse->address=$request->address;
        $warehouse->location=$request->location;
        $warehouse->email=$request->email;
        $warehouse->telephone=$request->telephone;
        $warehouse->save();
        return redirect('/warehouse');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $warehouse=InventoryWarehouse::findOrFail($id);
        $warehouse->delete();
        return redirect('/warehouse');


    }
}
