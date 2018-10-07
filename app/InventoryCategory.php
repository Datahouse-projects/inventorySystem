<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryCategory extends Model
{

   protected $fillable=['name'];
   public function groups(){
       return $this->hasMany('App\InventoryProductGroup','category_id');
   }
}
