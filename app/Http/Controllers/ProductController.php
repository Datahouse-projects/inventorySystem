<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryCategory;
use App\InventoryProductGroup;
use App\InventoryBrand;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=InventoryProductGroup::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=InventoryCategory::all();
        $select=[];
        foreach($categories as $category){
            $select[$category->id]=$category->name;
        }
        return view('product.create',compact('select'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new InventoryProductGroup();
        $product->name=$request->name;
        $product->category_id=$request->category_id;
        $product->save();
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group=InventoryProductGroup::findOrFail($id);
        $products=$group->products()->get();
        $brands=InventoryBrand::all();
        $brandArray=[];
        foreach($brands as $brand){
            $brandArray[$brand->id]=$brand->name;
        }
        return view('product.show',compact('products','brandArray'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=InventoryProductGroup::findOrFail($id);
        $categories=InventoryCategory::all();
        $select=[];
        foreach($categories as $category){
            $select[$category->id]=$category->name;
        }
        return view('product.edit',compact('select','product'));
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
        $product=InventoryProductGroup::find($id);
        $product->name=$request->name;
        $product->category_id=$request->category_id;
        $product->save();
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=InventoryProductGroup::findOrFail($id);
        $product->delete();
        return redirect('/product');
    }
}
