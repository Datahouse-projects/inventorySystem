<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InventoryBrandSeeder::class);
        $this->call(InventoryCategorySeeder::class);
        $this->call(InventoryProductSeeder::class);
        $this->call(InventoryProductGroupSeeder::class);
        $this->call(InventoryProductVarietySeeder::class);
        $this->call(InventoryWarehouseSeeder::class);
        $this->call(InventoryStockSeeder::class);
        $this->call(InventoryProductDiscountSeeder::class);
        $this->call(InventoryPriceSeeder::class);
        $this->call(InventorySupplierSeeder::class);
        $this->call(InventoryOrderInfoSeeder::class);
        $this->call(InventoryOrderHeaderSeeder::class);
        $this->call(InventoryOrderLineSeeder::class);
        $this->call(InventoryProductPromotionSeeder::class);
        $this->call(InventoryDiscountVarietySeeder::class);
    }
}
