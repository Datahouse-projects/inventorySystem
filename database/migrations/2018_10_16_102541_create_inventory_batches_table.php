<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_batches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('batch_code');
            $table->date('delivery_date');
            $table->integer('product_variety_id');
            $table->integer('initial_stock');
            $table->integer('stock_level');
            $table->decimal('unit_cost');  //cost per unit
            $table->date('manufacture_date');
            $table->date('expire_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_batches');
    }
}
