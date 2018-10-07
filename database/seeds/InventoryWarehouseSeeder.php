<?php

use Illuminate\Database\Seeder;

class InventoryWarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_warehouses')->insert([
            "name"=>"tabata deport",
            "address"=>"P.O BOX 1720 TABATA",
            "email"=>"tabatadeport@inventory.com",
            "telephone"=>255717709870,
            "location"=>"Dar es salaam"
        ]);
        DB::table('inventory_warehouses')->insert([
            "name"=>"temeke deport",
            "address"=>"P.O BOX 1720 TEMEKE",
            "email"=>"temekedeport@inventory.com",
            "telephone"=>255718798701,
            "location"=>"Dar es salaam"
        ]);
    }
}
