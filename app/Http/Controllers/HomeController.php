<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryProductGroup;
use App\InventoryProduct;
use App\InventoryProductVariety;
use App\InventoryBatch;
use App\InventoryStock;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group=InventoryProductGroup::all()->count();
        $product=InventoryProduct::all()->count();
        $items=InventoryProductVariety::all();
        $sum=0;
        foreach($items as $item){
            $stock_level=InventoryBatch::where('product_variety_id',$item->id)->sum('stock_level');
            $reorder_level=InventoryStock::where('product_variety_id',$item->id)->pluck('reorder_level');
            if($stock_level<$reorder_level[0]){
                $sum+=1;
            }
        }

        return view('home.index',compact('group','product','sum'));

    }
}
