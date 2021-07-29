<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStoreIdColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('store_id')->index()->after('id');
            $table->tinyInteger('gender')->nullable()->after('email');
            $table->date('birthday')->nullable()->after('gender');
            $table->string('phone')->nullable()->after('birthday');
            $table->boolean('is_active')->default(1)->after('remember_token');
            $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
