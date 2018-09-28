<?php

use Illuminate\Database\Seeder;

class InventoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_products')->insert([
            "product_group_id"=>1,
            "brand_id"=>3,
            "name"=>"Twiga cement",
            "product_code"=>"B001",
            "has_lots"=>1,
            "default_uom"=>"kg"
        ]);
        DB::table('inventory_products')->insert([
            "product_group_id"=>1,
            "brand_id"=>4,
            "name"=>"Simba cement",
            "product_code"=>"B002",
            "has_lots"=>1,
            "default_uom"=>"kg"
        ]);
        DB::table('inventory_products')->insert([
            "product_group_id"=>1,
            "brand_id"=>5,
            "name"=>"Dangonte cement",
            "product_code"=>"B003",
            "has_lots"=>1,
            "default_uom"=>"kg"
        ]);
        DB::table('inventory_products')->insert([
            "product_group_id"=>1,
            "brand_id"=>6,
            "name"=>"Rhino cement",
            "product_code"=>"B004",
            "has_lots"=>1,
            "default_uom"=>"kg"
        ]);
        DB::table('inventory_products')->insert([
            "product_group_id"=>2,
            "brand_id"=>1,
            "name"=>"Coca cola",
            "product_code"=>"B005",
            "has_lots"=>1,
            "default_uom"=>"mils"
        ]);
        DB::table('inventory_products')->insert([
            "product_group_id"=>2,
            "brand_id"=>1,
            "name"=>"Fanta orange",
            "product_code"=>"B006",
            "has_lots"=>1,
            "default_uom"=>"mils"
        ]);
        DB::table('inventory_products')->insert([
            "product_group_id"=>2,
            "brand_id"=>1,
            "name"=>"Fanta passiom",
            "product_code"=>"B007",
            "has_lots"=>1,
            "default_uom"=>"mils"
        ]);
        DB::table('inventory_products')->insert([
            "product_group_id"=>2,
            "brand_id"=>1,
            "name"=>"Fanta pinaple",
            "product_code"=>"B008",
            "has_lots"=>1,
            "default_uom"=>"mils"
        ]);
        DB::table('inventory_products')->insert([
            "product_group_id"=>2,
            "brand_id"=>1,
            "name"=>"Sprite",
            "product_code"=>"B009",
            "has_lots"=>1,
            "default_uom"=>"mils"
        ]);
        DB::table('inventory_products')->insert([
            "product_group_id"=>2,
            "brand_id"=>2,
            "name"=>"7up",
            "product_code"=>"B010",
            "has_lots"=>1,
            "default_uom"=>"mils"
        ]);
        DB::table('inventory_products')->insert([
            "product_group_id"=>2,
            "brand_id"=>2,
            "name"=>"pepsi",
            "product_code"=>"B011",
            "has_lots"=>1,
            "default_uom"=>"mils"
        ]);
        DB::table('inventory_products')->insert([
            "product_group_id"=>2,
            "brand_id"=>2,
            "name"=>"Mirinda orange",
            "product_code"=>"B012",
            "has_lots"=>1,
            "default_uom"=>"mils"
        ]);
        DB::table('inventory_products')->insert([
            "product_group_id"=>2,
            "brand_id"=>2,
            "name"=>"Mirinda black",
            "product_code"=>"B013",
            "has_lots"=>1,
            "default_uom"=>"mils"
        ]);
    }
}
