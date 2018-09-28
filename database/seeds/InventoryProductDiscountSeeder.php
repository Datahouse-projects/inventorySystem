<?php

use Illuminate\Database\Seeder;

class InventoryProductDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_product_discounts')->insert([
            "items_number"=>100,
            "percentage_discount"=>4
        ]);
        DB::table('inventory_product_discounts')->insert([
            "items_number"=>500,
            "percentage_discount"=>7
        ]);
        DB::table('inventory_product_discounts')->insert([
            "items_number"=>1000,
            "percentage_discount"=>9
        ]);

        DB::table('inventory_product_discounts')->insert([
            "items_number"=>24,
            "percentage_discount"=>1.2
        ]);
        DB::table('inventory_product_discounts')->insert([
            "items_number"=>12,
            "percentage_discount"=>0.85
        ]);
        DB::table('inventory_product_discounts')->insert([
            "items_number"=>8,
            "percentage_discount"=>1.4
        ]);

    }
}
