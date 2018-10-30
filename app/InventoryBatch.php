<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryBatch extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'batch_code',
        'product_variety_id',
        'delivery_date',
        'initial_stock',
        'stock_level',
        'unit_cost',
        'manufacture_date',
        'expire_date'
    ];
    protected $dates = ['deleted_at'];
    
    public function prices(){
        return $this->hasOne('App\InventoryPrice','batch_id','id');
    }


}
