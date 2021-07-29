<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id')->index();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('summary')->nullable();
            $table->text('content')->nullable();
            $table->integer('view')->nullable();
            $table->text('url')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_pin')->default(false);
            $table->boolean('is_active')->default(1);
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
