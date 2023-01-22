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
        Schema::table('user_access_tbs', function (Blueprint $table) {
          
            $table->foreign('experience_id')->references('id')->on('experience_tbs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_access_tbs', function (Blueprint $table) {
            $table->dropColumn('experience_id');
            $table->dropForeign(['experience_id']);
        });
    }
};
