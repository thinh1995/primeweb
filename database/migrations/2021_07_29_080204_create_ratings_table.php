<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id')->index();
            $table->unsignedBigInteger('rateable_id')->nullable();
            $table->string('rateable_type')->nullable();
            $table->integer('vote')->nullable();
            $table->text('content')->nullable();
            $table->json('extra_content')->nullable();
            $table->unsignedBigInteger('created_by')->index()->nullable();
            $table->boolean('is_active')->index();
            $table->integer('position')->nullable();
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
        Schema::dropIfExists('ratings');
    }
}
