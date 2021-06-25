<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('item_id');
            $table->string('name');
            $table->string('brand');
            $table->string('category');
            $table->string('model');
            $table->double('selling_price');
            $table->double('cost');
            $table->double('weight');
            $table->string('dimensions');
            $table->string('barcode');
            $table->bigInteger('stock_quantity');
            $table->bigInteger('reorder_level');
            //$table->foreign('supplier_id')->references('supplier_id')->on('suppliers');

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
        Schema::dropIfExists('items');
    }
}
