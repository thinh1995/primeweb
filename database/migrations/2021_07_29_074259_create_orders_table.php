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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id')->index();
            $table->unsignedBigInteger('customer_id')->index();
            $table->unsignedBigInteger('delivery_id')->index();
            $table->unsignedBigInteger('currency_id')->index();
            $table->text('note')->nullable();
            $table->date('invoice_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->unsignedInteger('payment_method_id')->index();
            $table->string('promotion_code')->nullable();
            $table->decimal('total_discount', 12, 2)->nullable();
            $table->decimal('total_discount_tax', 12, 2)->nullable();
            $table->decimal('total_shipping', 12, 2)->nullable();
            $table->decimal('total_shipping_tax', 12, 2)->nullable();
            $table->decimal('sub_total', 12, 2)->nullable();
            $table->decimal('total', 12, 2)->nullable();
            $table->decimal('total_tax', 12, 2)->nullable();
            $table->unsignedBigInteger('shipping_address_id')->index();
            $table->unsignedBigInteger('billing_address_id')->index()->nullable();
            $table->integer('status')->index();
            $table->integer('shipping_status')->index()->nullable();
            $table->integer('payment_status')->index()->nullable();
            $table->unsignedBigInteger('created_by')->index();
            $table->timestamps();
            $table->softDeletes();
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
