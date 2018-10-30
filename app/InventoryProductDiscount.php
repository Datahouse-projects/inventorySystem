<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryProductDiscount extends Model
{
    
    protected $fillable=[

        'items_number',
        'percentage_discount'
    ];
    public  function varieties(){
        return $this->belongsToMany('App\InventoryProductVariety','inventory_variety_discount',
            'discount_id','product_variety_id');
    }


}
