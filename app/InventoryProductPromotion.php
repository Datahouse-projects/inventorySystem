<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryProductPromotion extends Model{
    protected $fillable=[
        "product_variety_id",
        "items_number",
        "price",
        "from_date",
        "to_date"
    ];
    public  function varieties(){
        return $this->belongsTo('App\InventoryProductVariety','product_variety_id');
    }
}
