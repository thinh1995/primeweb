<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id')->index();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('media')->nullable();
            $table->text('media_signature')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('thumbnail_signature')->nullable();
            $table->json('detail')->nullable();
            $table->boolean('is_active')->nullable();
            $table->unsignedBigInteger('category_id')->index()->nullable();
            $table->integer('position')->nullable();
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
        Schema::dropIfExists('media_items');
    }
}
