<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_tbs', function (Blueprint $table) {
            $table->foreign('education_id')->references('id')->on('education_tbs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_tbs', function (Blueprint $table) {
            $table->dropForeign(['education_id']);
        });
    }
};
