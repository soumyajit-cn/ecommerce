<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id', 100)->unique();
            $table->bigInteger('user_id');
            //$table->bigInteger('productId');
            //$table->string('size',15);
            $table->json('attributes');
            $table->timestamp('order_date')->default(date('Y-m-d H:i:s'));
            $table->enum('payment_method', ['EMI', 'Paid','COD']);
            $table->timyInteger('order_status');
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
        Schema::dropIfExists('orders');
    }
}
