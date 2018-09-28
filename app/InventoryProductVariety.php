<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryProductVariety extends Model
{
    protected $fillable=[
        'product_id',
        'unit_measure',
        'package_material',
        'unit_price',


    ];
    public function products(){
        return $this->belongsTo('App\InventoryProduct','product_id');
    }
    public function discounts(){
        return $this->belongsToMany('App\InventoryProductDiscount',
            'inventory_variety_discount','product_variety_id','discount_id');
    }
    public function warehouses(){
        return $this->belongsToMany('App\InventoryWarehouse','inventory_stocks',
            'product_variety_id','warehouse_id')->withPivot
        ('stock_level','reorder_level')->using('App\InventoryStock');
    }
    public function prices(){
        return $this->hasMany('App\InventoryPrice','product_variety_id');
    }
    public function suppliers(){
        return $this->belongsToMany('App\InventorySupplier',
            'inventory_order_infos','product_variety_id',
            'supplier_id')->withPivot('lead_time')->using('App\InventoryOrderInfo');
    }
    public  function  orderlines(){
        return $this->belongsToMany('App\InventoryProductVariety','inventory_order_lines',
            'product_variety_id',
            'order_header_id')->withPivot('total_amount','has_vat','quantity','manufacture_date',
            'expire_date');
    }
    public  function promotions(){
        return $this->hasMany('App\InventoryProductPromotion','product_variety_id');
    }



}
