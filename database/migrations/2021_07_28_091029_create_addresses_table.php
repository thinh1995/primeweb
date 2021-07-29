<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id')->index();
            $table->string('address');
            $table->string('full_address')->nullable();
            $table->unsignedBigInteger('country_id')->index();
            $table->unsignedBigInteger('province_id')->index();
            $table->unsignedBigInteger('district_id')->index();
            $table->unsignedBigInteger('ward_id')->index();
            $table->decimal('longitude')->nullable();
            $table->decimal('latitude')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
