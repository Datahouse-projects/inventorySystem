<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryWarehouse extends Model
{
    protected $fillable=[
        'name','address','email','location','telephone'
    ];
    public function varieties(){
        return $this->belongsToMany('App\InventoryProductVariety','inventory_stocks',
            'warehouse_id','product_variety_id')->withPivot
        ('stock_level','reorder_level')->using('App\InventoryStock');
    }
}
