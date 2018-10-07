<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryOrderLot extends Model
{
    protected $fillable=[
        'order_line_id',
        'manufacture_date',
        'expire_date'
    ];
    public function lots(){
        return $this->belongsTo('App\InventoryOrderLine','order_line_id');
    }
}
