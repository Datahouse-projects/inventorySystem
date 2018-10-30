<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryTransfer;
use App\InventoryBatch;
use App\InventoryProductVariety;
use App\InventoryPrice;
use Carbon\Carbon;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public   $name=[],$measure=[],$uom=[],$date=[],$transfers,$quantities;
    public function __construct(){
        $this->transfers=InventoryTransfer::all();
        $this->quantities=InventoryProductVariety::all();
        $datetime=Carbon::now();
        $this->date=$datetime->format('Y-m-d');
        foreach ($this->quantities as $quantity ){
            $this->measure[$quantity->id]=$quantity->unit_measure;
            $this->uom[$quantity->id]=InventoryProductVariety::find($quantity->id)->products()->pluck('default_uom');
            $this->name[$quantity->id]=InventoryProductVariety::find($quantity->id)->products()->pluck('name');
        }

    }
    public function index()
    {
        $transfers=$this->transfers;
        $name=$this->name;
        return view('transfer.index',compact('name','transfers'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quantity=[];
        foreach($this->quantities as $product){
            $quantity[$product->id]=$this->name[$product->id][0].'('.$this->measure[$product->id].' '.$this->uom[$product->id][0].')';
        }
        return view('transfer.create',compact('quantity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transfer=new InventoryTransfer();
        $product=$request->product_variety_id;
        $quantity=$request->quantity;
        $initial_price=0;
        $first=InventoryBatch::where('product_variety_id',$product)->first();
        $price = $first->prices()->pluck('product_price');
        if(InventoryBatch::where('product_variety_id',$product)->first()->decrement('stock_level',$quantity)) {
            $price = InventoryBatch::where('product_variety_id', '=', $product)->orderBy('id', 'asc')->first()->prices()->pluck('product_price');
            $itemprice = (float)$price[0];
            $transfer->product_variety_id = $product;
            $transfer->quantity =$quantity;
            $transfer->total_amount = ($request->quantity) * $itemprice;
            $transfer->date = $this->date;
            $transfer->save();
        }
        return redirect('/transfer');
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
        //
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
