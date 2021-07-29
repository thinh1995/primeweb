<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id')->index();
            $table->unsignedBigInteger('settingable_id');
            $table->string('settingable_type');
            $table->string('name');
            $table->string('key');
            $table->text('description')->nullable();
            $table->text('value')->nullable();
            $table->text('field')->nullable();
            $table->boolean('is_active')->default(1);
            $table->unsignedBigInteger('parent_id')->index()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['settingable_id', 'settingable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
