<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryBrand extends Model
{
protected  $fillable=['name'];

public function  products(){
    return $this->hasMany('App\InventoryProduct','brand_id');
}

}
