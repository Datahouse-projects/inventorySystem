<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventorySupplier extends Model
{
    protected $fillable=[
        'name',
        'location',
        'address',
        'email',
        'telephone'
    ];
    public function varieties(){
        return $this->belongsToMany('App\InventoryProductVariety','inventory_order_infos',
        'supplier_id',
            'product_variety_id')->withPivot('lead_time')->using('App\InventoryOrderInfo');
    }
    public function  headers(){
        return $this->hasMany('App\InventoryOrderHeader','supplier_id');
    }

}
