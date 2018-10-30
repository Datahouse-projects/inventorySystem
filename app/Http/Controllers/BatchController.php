<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryBatch;
use App\InventoryProductVariety;
use App\InventoryPrice;
use Carbon\Carbon;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public   $name=[],$price=[],$measure=[],$uom=[],$batches,$quantities;
    public function __construct(){
        $this->batches=InventoryBatch::all();
        $this->quantities=InventoryProductVariety::all();
        foreach ($this->quantities as $quantity ){
            $this->measure[$quantity->id]=$quantity->unit_measure;
            $this->uom[$quantity->id]=InventoryProductVariety::find($quantity->id)->products()->pluck('default_uom');
        }
        foreach($this->batches as $batch){
            $this->name[$batch->product_variety_id]=InventoryProductVariety::find($batch->product_variety_id)->products()->pluck('name');
            $this->price[$batch->id]=InventoryBatch::find($batch->id)->prices()->pluck('product_price');
        }
    }
    public function index()
    {
        $batches=$this->batches;
        $name=$this->name;
        $price=$this->price;
        $uom=$this->uom;
        $measure=$this->measure;
        return view('batch.index',compact('batches','name','measure','uom','price'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quantity=[];
        $string=InventoryBatch::orderBy('batch_code','desc')->first()->batch_code;
        $later=substr($string,0,4);
        $suf=substr($string,4,7);
        $integer=((int)$suf)+1;
        $result=str_pad($integer,3,"0",STR_PAD_LEFT);
        $new_code=$later.''.$result;
        foreach($this->quantities as $product){
            $quantity[$product->id]=$this->name[$product->id][0].'('.$this->measure[$product->id].' '.$this->uom[$product->id][0].')';
        }
        return view('batch.create',compact('quantity','new_code'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $batch=new InventoryBatch();
        $price=new InventoryPrice();
        $carbon=new Carbon();
        $batch->batch_code=$request->input('batch_code');
        $batch->product_variety_id=$request->product_variety_id;
        $batch->delivery_date=$request->delivery_date;
        $batch->initial_stock=$request->initial_stock;
        $batch->stock_level=$request->initial_stock;
        $amount=($request->total_amount)/($request->initial_stock);
        $batch->unit_cost=$amount;
        $batch->manufacture_date=$request->manufacture_date;
        $batch->expire_date=$request->expire_date;
        $tdate=new Carbon('+2 year');
        $todate=$tdate->format('Y-m-d');
        $frmdate=new Carbon('-2 year');
        $fromdate=$frmdate->format('Y-m-d');
        
        if($batch->save()){
            $batch_price=InventoryBatch::orderBy('id','desc')->first();
            $price->from_date=$fromdate;
            $price->to_date=$todate;
            $price->product_price=$amount*1.2;
            $batch_price->prices()->save($price);
        }
            
        
        return  redirect('/batch');
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
