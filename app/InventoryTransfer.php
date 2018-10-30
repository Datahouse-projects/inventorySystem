<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryTransfer extends Model
{
   
    public  $fillable=[
        'product_variety_id',
        'date',
        'quantity',
        'total_amount'
    ];
    protected $dates = ['deleted_at'];
}
