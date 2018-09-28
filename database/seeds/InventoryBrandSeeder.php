<?php

use Illuminate\Database\Seeder;

class InventoryBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_brands')->insert([
            "name"=>"Coca cola"
        ]);
        DB::table('inventory_brands')->insert([
            "name"=>"Pepsi"
        ]);
        DB::table('inventory_brands')->insert([
            "name"=>"Twiga"
        ]);
        DB::table('inventory_brands')->insert([
            "name"=>"Simba"
        ]);
        DB::table('inventory_brands')->insert([
            "name"=>"Dangote"
        ]);
        DB::table('inventory_brands')->insert([
            "name"=>"Rhino"
        ]);

    }
}
