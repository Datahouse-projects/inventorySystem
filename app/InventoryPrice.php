<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryPrice extends Model
{
    protected $fillable=[
       'product_variety_id',
        'from_date',
        'to_date',
        'product_price'
    ];
}
