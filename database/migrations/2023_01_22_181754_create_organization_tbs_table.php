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
        Schema::create('organization_tbs', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name');
            $table->string('institution');
            $table->string('duration');
            $table->string('description');
            $table->string('image');
            $table->string('updated_at')->nullable();
            $table->string('created_at')->nullable();
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organization_tbs');
    }
};
