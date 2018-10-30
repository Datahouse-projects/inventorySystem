<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\InventorySetting;

class InventoryPrice extends Model
{
    protected $fillable=[
       'batch_id',
        'from_date',
        'to_date',
        'product_price'
    ];
    public function getProductPriceAttribute($value){
        $currency=InventorySetting::where('name','currency')->pluck('value');
        return $value.' '.strtoupper($currency[0]);
    }
    
}
