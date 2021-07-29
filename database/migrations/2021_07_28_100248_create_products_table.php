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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id')->index();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('ingredient')->nullable();
            $table->text('user_manual')->nullable();
            $table->text('long_description')->nullable();
            $table->integer('package_weight')->nullable();
            $table->integer('package_length')->nullable();
            $table->integer('package_height')->nullable();
            $table->integer('package_width')->nullable();
            $table->tinyInteger('package_dimension_unit')->nullable();
            $table->integer('package_weight_unit')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('quantity')->nullable();
            $table->text('url')->nullable();
            $table->unsignedBigInteger('brand_id')->index()->nullable();
            $table->boolean('is_active')->default(0);
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
        Schema::dropIfExists('products');
    }
}
