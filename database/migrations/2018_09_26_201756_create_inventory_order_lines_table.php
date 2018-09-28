<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryOrderLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_order_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_header_id');
            $table->integer('product_variety_id');
            $table->decimal('total_amount',10,2);
            $table->integer('quantity');
            $table->tinyInteger('has_vat')->default(1);
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
        Schema::dropIfExists('inventory_order_lines');
    }
}
