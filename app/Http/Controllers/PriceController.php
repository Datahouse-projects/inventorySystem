<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryBatch;
use App\InventoryPrice;
use App\InventoryProductVariety;
use Carbon\Carbon;
class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public   $name=[],$measure=[],$uom=[],$quantities,$date;
    public function __construct(){
        $this->quantities=InventoryProductVariety::all();
        $this->prices=InventoryPrice::all();
        $datetime=Carbon::now();

        $this->date=$datetime->format('Y-m-d');
        foreach ($this->quantities as $quantity ){
            $this->measure[$quantity->id]=$quantity->unit_measure;
            $this->uom[$quantity->id]=InventoryProductVariety::find($quantity->id)->products()->pluck('default_uom');
            $this->name[$quantity->id]=InventoryProductVariety::find($quantity->id)->products()->pluck('name');
            $id[$quantity->id]=InventoryProductVariety::find($quantity->id)->products()->pluck('id');

        }

    }
    public function index()
    {
        $batches=InventoryBatch::all();
        $name=$this->name;
        $uom=$this->uom;
        $measure=$this->measure;
        $price=[];
        $fromdate=[];
        $todate=[];

        foreach($batches as $batch){
            $price[$batch->id]=InventoryBatch::find($batch->id)->prices()->pluck('product_price');
            $fromdate[$batch->id]=InventoryBatch::find($batch->id)->prices()->pluck('from_date');
            $todate[$batch->id]=InventoryBatch::find($batch->id)->prices()->pluck('to_date');
            $id[$batch->id]=InventoryBatch::find($batch->id)->prices()->pluck('id');

        }
        return view('price.index',compact('batches','uom','name','measure','price','fromdate','todate','id'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $batch=InventoryPrice::find($id);
        return view('price.edit',compact('batch'));
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
        $price=InventoryPrice::find($id);
        $price->product_price=$request->product_price;
        $price->from_date=$request->from_date;
        $price->save();
        return redirect('/price');

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
