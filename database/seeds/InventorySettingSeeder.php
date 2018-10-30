<?php

use Illuminate\Database\Seeder;

class InventorySettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_settings')->insert([
            'name'=>'VAT',
            'value'=>'18'
        ]);
        DB::table('inventory_settings')->insert([
            'name'=>'currency',
            'value'=>'Tsh'
        ]);

    }
}
