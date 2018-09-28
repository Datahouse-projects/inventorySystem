<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryOrderHeader extends Model
{
    protected $fillable=[
        'supplier_id',
        'purchase_date',
        'total_amount'
    ];
    public function orderlines(){
        return $this->hasMany('App\InventoryOrderLine','order_header_id');
    }
    public function suppliers(){
        return $this->belongsTo('App\InventorySupplier','supplier_id');
    }
    public  function  varieties(){
        return $this->belongsToMany('App\InventoryProductVariety','inventory_order_lines',
            'order_header_id',
            'product_variety_id')->withPivot('total_amount','has_vat'
            ,'quantity','manufacture_date','expire_date');
    }
}
