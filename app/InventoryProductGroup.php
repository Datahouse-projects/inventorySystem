<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryProductGroup extends Model
{
    protected $fillable=['name','category_id'];
    public function products(){
        return $this->hasMany('App\InventoryProduct','product_group_id');
    }
    public function categories(){
        return $this->belongsTo("App\InventoryCategory","category_id");
    }

}
