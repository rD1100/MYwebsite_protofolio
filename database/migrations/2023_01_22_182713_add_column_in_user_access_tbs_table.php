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
            // $table->unsignedBigInteger('organization_id')->after('experience_id');
            $table->foreign('organization_id')->references('id')->on('organization_tbs')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
         
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
            $table->dropColumn('organization_id');
        });
    }
};
