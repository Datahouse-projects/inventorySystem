<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryProductVariety;
use App\InventoryStock;
use App\InventoryBatch;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $stocks=[],$name=[],$measure=[],$uom=[];
    public function __construct(){
        $this->stocks=InventoryStock::all();
        foreach($this->stocks as $stock){
            $this->name[$stock->id]=InventoryProductVariety::find($stock->product_variety_id)->products()->pluck('name');
            $this->measure[$stock->id]=$stock->products()->pluck('unit_measure');
            $this->uom[$stock->id]=InventoryProductVariety::find($stock->product_variety_id)->products()->pluck('default_uom');
        }

    }
    public function index()
    {
        $stocks=$this->stocks;
        $name=$this->name;
        $measure=$this->measure;
        $uom=$this->uom;
        return view('stock.index',compact('stocks','name','uom','measure'));
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
        $items=InventoryProductVariety::all();
        $stock=[];
        $name=[];
        $measure=[];
        $uom=[];
        $reorder=[];
        $id=[];
        foreach($items as $item){
            $stock_level=InventoryBatch::where('product_variety_id',$item->id)->sum('stock_level');
            $reorder_level=InventoryStock::where('product_variety_id',$item->id)->pluck('reorder_level');
            if($stock_level<$reorder_level[0]){
                $name[$item->id]=$item->products()->pluck('name');
                $stock[$item->id]=$stock_level;
                $reorder[$item->id]=$reorder_level;
                $uom[$item->id]=$item->products()->pluck('default_uom');
                $measure[$item->id]=$item->unit_measure;
                $id[]=$item->id;
            }
        }
        return view('stock.show',compact('name','stock','reorder','uom','measure','id','items'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock=InventoryStock::find($id);
        return view('stock.edit',compact('stock'));
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
        $stock=InventoryStock::find($id);
        $stock->reorder_level=$request->reorder_level;
        $stock->save();
        return redirect('/stock');
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
