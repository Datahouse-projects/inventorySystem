<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class InventoryOrderInfo extends Pivot
{
    protected $fillable=[
        'product_variety_id',
        'supplier_id',
        'lead_time'
    ];

}
