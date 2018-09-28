<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryProduct extends Model
{
    protected  $fillable=[
        'product_group_id','brand_id','name','product_code','has_lots','default_uom'
    ];
    public  function varieties(){
        return $this->hasMany('App\InventoryProductVariety','product_id');
    }
    public function groups(){
        return $this->belongsTo('App\InventoryProductGroup','product_group_id');
    }
    public function  brands(){
        return $this->belongsTo('App\InventoryBrand','brand_id');
    }

}
