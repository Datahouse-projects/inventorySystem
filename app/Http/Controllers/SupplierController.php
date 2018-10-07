<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventorySupplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers=InventorySupplier::all();
        return view('supplier.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier=new  InventorySupplier();
        $supplier->name=$request->name;
        $supplier->address=$request->address;
        $supplier->location=$request->location;
        $supplier->telephone=$request->telephone;
        $supplier->email=$request->email;
        $supplier->save();
        return redirect('/supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier=InventorySupplier::findOrFail($id);
        return view('supplier.edit',compact('supplier'));
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
        $supplier=InventorySupplier::findOrFail($id);
        $supplier->name=$request->name;
        $supplier->address=$request->address;
        $supplier->location=$request->location;
        $supplier->telephone=$request->telephone;
        $supplier->email=$request->email;
        $supplier->save();
        return redirect('/supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier=InventorySupplier::findOrFail($id);
        $supplier->delete();
        return redirect('/supplier');

    }
}
