<?php

use Illuminate\Database\Seeder;

class InventoryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        DB::table('inventory_categories')->insert([
            "name"=>"Building material"
        ]);
        DB::table('inventory_categories')->insert([
            "name"=>"Beverages"
        ]);

    }
}
