<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_company');
            // $table->string('category',100);
            // $table->string('sub_category',100);
            $table->json('attribute');
            $table->longtext('product_description');
            $table->integer('product_price');
            $table->integer('product_price_before_discount');
            $table->tinyInteger('order_limit');
            $table->boolean('in_stock')->default(1);
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
        Schema::dropIfExists('products');
    }
}
