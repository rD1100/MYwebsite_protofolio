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
        Schema::create('description_tbs', function (Blueprint $table) {
            $table->id();
            $table->string('user_description');
            $table->string("education_description");
            $table->string("experience_desription");
            $table->string("skill_description");
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('description_tbs');
    }
};
