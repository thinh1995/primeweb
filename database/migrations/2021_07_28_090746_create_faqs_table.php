<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id')->index();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('content')->nullable();
            $table->json('extracontent')->nullable();
            $table->boolean('is_question')->default(0);
            $table->boolean('is_answer')->default(0);
            $table->unsignedBigInteger('parent_id')->index()->nullable();
            $table->unsignedBigInteger('category_id')->index()->nullable();
            $table->boolean('is_active')->default(1);
            $table->boolean('is_publish')->default(0);
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
        Schema::dropIfExists('faqs');
    }
}
