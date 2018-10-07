<?php

use Illuminate\Database\Seeder;

class InventoryOrderHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_order_headers')->insert([
            "order_code"=>"OR-0001",
            "supplier_id"=>1,
            "purchase_date"=>"2018-09-12",
            "total_amount"=>1000000
        ]);
        DB::table('inventory_order_headers')->insert([
            "order_code"=>"OR-0002",
            "supplier_id"=>2,
            "purchase_date"=>"2018-09-13",
            "total_amount"=>1500000
        ]);
        DB::table('inventory_order_headers')->insert([
            "order_code"=>"OR-0003",
            "supplier_id"=>3,
            "purchase_date"=>"2018-09-14",
            "total_amount"=>2000000
        ]);
        DB::table('inventory_order_headers')->insert([
            "order_code"=>"OR-0004",
            "supplier_id"=>4,
            "purchase_date"=>"2018-09-15",
            "total_amount"=>2500000
        ]);
    }
}
