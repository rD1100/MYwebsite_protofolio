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
        Schema::create('education_tbs', function (Blueprint $table) {
            $table->id();
            $table->string('education_name');
            $table->string('education_major');
            $table->string('education_duration');
            $table->float('education_grade')->nullable();;
            $table->string('education_description');
            $table->string('education_image')->nullable();
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
        Schema::dropIfExists('education_tbs');
    }
};
