<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class InventoryOrderLine extends Pivot
{
    protected $fillable=[
        "order_header_id",
        "product_variety_id",
        "total_amount",
        "quantity",
        "has_vat",
        "manufacture_date",
        "expire_date"
    ];

}
