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
        Schema::create('experience_tbs', function (Blueprint $table) {
            $table->id();
            $table->string('experience_name');
            $table->string('experience_duration');
            $table->string('experience_technology');
            $table->string('experience_description');
            $table->string('experience_link');
            $table->string('experience_image')->nullable();
            $table->timestamp('added_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience_tbs');
    }
};
