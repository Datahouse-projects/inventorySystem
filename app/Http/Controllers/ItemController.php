<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryProduct;
use App\InventoryProductGroup;
use App\InventoryBrand;
use App\InventoryProductVariety;


class ItemController extends Controller
{
    public $brands=[];
    public $products=[];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $itembrand=InventoryBrand::all();
        $itemproduct=InventoryProductGroup::all();
        foreach($itembrand as $brand){
            $this->brands[$brand->id]=$brand->name;
        }
        $brands=$this->brands;
        foreach ($itemproduct as $product){
            $this->products[$product->id]=$product->name;
        }


    }


    public function index()
    {
        $items=InventoryProduct::all();
        $brands=$this->brands;
        return view('item.index',compact('items','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $string=InventoryProduct::orderBy('product_code','desc')->first()->product_code;
        $later=substr($string,0,1);
        $suf=substr($string,1,3);
        $integer=((int)$suf)+1;
        $result=str_pad($integer,3,"0",STR_PAD_LEFT);
        $new_code=$later.''.$result;
        $brands=$this->brands;
        $products=$this->products;


        return view('item.create',compact('brands','products','new_code'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item=new InventoryProduct();
        $item->product_code=$request->input('product_code');
        $item->name=$request->name;
        $item->brand_id=$request->brand_id;
        $item->product_group_id=$request->product_group_id;
        $item->default_uom=$request->default_uom;
        $item->save();
        return redirect('/item');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=InventoryProduct::findOrFail($id);
        $items=$product->varieties()->get();
        $reorder=[];
        $stock=[];
        foreach($items as $item){
            $reorder[$item->id]=InventoryProductVariety::find($item->id)->warehouses()->sum('reorder_level');
            $stock[$item->id]=InventoryProductVariety::find($item->id)->warehouses()->sum('stock_level');

        }



        return view('item.show',compact('items','product','reorder','stock'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=InventoryProduct::findOrFail($id);
        $brands=$this->brands;
        $products=$this->products;
        return view('item.edit',compact('item','brands','products'));
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
        $item=InventoryProduct::findOrFail($id);
        $item->product_code=$request->input('product_code');
        $item->name=$request->name;
        $item->brand_id=$request->brand_id;
        $item->product_group_id=$request->product_group_id;
        $item->default_uom=$request->default_uom;
        $item->save();
        return redirect('/item');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=InventoryProduct::findOrFail($id);
        $item->delete();
        return redirect('/item');
    }
}
