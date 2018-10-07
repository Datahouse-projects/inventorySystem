<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class InventoryStock extends  Pivot
{
    protected $fillable=[
        'product_variety_id',
        'warehouse_id',
        'stock_level',
        'reorder_level'
    ];
}
