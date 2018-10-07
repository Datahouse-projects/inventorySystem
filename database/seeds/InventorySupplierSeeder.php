<?php

use Illuminate\Database\Seeder;

class InventorySupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_suppliers')->insert([
            "name"=>"Nunja investement",
            "location"=>"Tanga",
            "address"=>"P.O BOX tanga",
            "email"=>"nunja@gmail.com",
            "telephone"=>"0789678546"
        ]);
        DB::table('inventory_suppliers')->insert([
            "name"=>"Goal investement",
            "location"=>"Zanzbar",
            "address"=>"P.O BOX pemba",
            "email"=>"goal@gmail.com",
            "telephone"=>"0789678547"
        ]);
        DB::table('inventory_suppliers')->insert([
            "name"=>"Duru investement",
            "location"=>"Mwanza",
            "address"=>"P.O BOX Mwanza",
            "email"=>"duru@gmail.com",
            "telephone"=>"0789678548"
        ]);
        DB::table('inventory_suppliers')->insert([
            "name"=>"Fezi investement",
            "location"=>"Moshi",
            "address"=>"P.O BOX Moshi",
            "email"=>"fezi@gmail.com",
            "telephone"=>"0789678549"
        ]);

    }
}
