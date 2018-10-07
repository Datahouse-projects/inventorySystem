<?php

use Illuminate\Database\Seeder;

class InventoryProductGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_product_groups')->insert([
            "name"=>"cement",
            "category_id"=>1
        ]);
        DB::table('inventory_product_groups')->insert([
            "name"=>"soda",
            "category_id"=>2
        ]);
        DB::table('inventory_product_groups')->insert([
            "name"=>"beer",
            "category_id"=>2
        ]);

    }
}
