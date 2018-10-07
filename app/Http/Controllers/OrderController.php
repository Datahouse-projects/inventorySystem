<?php

namespace App\Http\Controllers;

use App\InventoryProduct;
use Illuminate\Http\Request;
use App\InventoryOrderHeader;
use App\InventorySupplier;
use Carbon\Carbon;
use App\InventoryProductVariety;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public $supplier=[];
    public $items=[];
    public function __construct()
    {
        $suppliers =InventorySupplier::all();
        foreach($suppliers as $supplier){
            $this->supplier[$supplier->id]=$supplier->name;
        }



    }


    public function index()
    {
        $orders=InventoryOrderHeader::all();
        $supplier=$this->supplier;
        return view('order.index',compact('orders','supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $string=InventoryOrderHeader::orderBy('order_code','desc')->first()->order_code;
        $later=substr($string,0,3);
        $suf=substr($string,3,6);
        $integer=((int)$suf)+1;
        $result=str_pad($integer,4,"0",STR_PAD_LEFT);
        $new_code=$later.''.$result;
        $supplier=$this->supplier;
        $carbon =Carbon::now();
        $date=$carbon->format('Y-m-d');
        return view('order.create',compact('supplier','new_code','date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $order=new InventoryOrderHeader();
        $order->order_code=$request->input('order_code');
        $order->purchase_date=$request->purchase_date;
        $order->supplier_id=$request->supplier_id;
        $order->total_amount=$request->total_amount;
        $order->save();
        return redirect('/order');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order=InventoryOrderHeader::find($id);
        $orderlines=$order->varieties()->get();
        $name=[];
        $unit=[];
        foreach($orderlines as $orderline){
            $name[$orderline->pivot->product_variety_id]=InventoryProductVariety::find(
                $orderline->pivot->product_variety_id)->products()->pluck('name');
            $unit[$orderline->pivot->product_variety_id]=InventoryProductVariety::find(
                $orderline->pivot->product_variety_id)->products()->pluck('default_uom');
        }
        return view('order.show',compact('orderlines','unit','name'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order=InventoryOrderHeader::find($id);
        $supplier=$this->supplier;
        $carbon =Carbon::now();
        $date=$carbon->format('Y-m-d');
        return view('order.edit',compact('date','supplier','order'));

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
        $order=InventoryOrderHeader::find($id);
        $order->order_code=$request->input('order_code');
        $order->supplier_id=$request->supplier_id;
        $order->purchase_date=$request->purchase_date;
        $order->total_amount=$request->total_amount;
        $order->save();
        return redirect('/order');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order=InventoryOrderHeader::find($id);
        $order->delete();
        return redirect('/order');
    }
}
