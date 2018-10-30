<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class InventoryStock extends  Model
{
    protected $fillable=[
        'product_variety_id',
        'reorder_level',

    ];
    public function products(){
        return $this->belongsTo('App\InventoryProductVariety','product_variety_id');
    }

}
