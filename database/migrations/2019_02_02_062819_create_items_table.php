<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            
            $table->string('name');
            $table->string('desc')->nullable();
            $table->string('image')->nullable();

            $table->string('brand')->nullable();
            $table->double('stock')->nullable();
            
            $table->double('purchase_mrp')->nullable();
            $table->double('purchase_rate')->nullable();
            $table->double('sale_mrp')->nullable();
            $table->double('sale_rate')->nullable();

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
