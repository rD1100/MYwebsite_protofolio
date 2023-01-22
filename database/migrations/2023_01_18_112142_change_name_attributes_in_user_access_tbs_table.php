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
           
            $table->unsignedBigInteger('name')->change();
            $table->renameColumn('name', 'user_id');
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
            $table->string('name');
        });
    }
};
