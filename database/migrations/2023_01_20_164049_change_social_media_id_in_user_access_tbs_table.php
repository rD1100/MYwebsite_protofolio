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
           $table->dropForeign(['user_id']);

                $table->foreignId('social_media_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ;
                    
            
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
            //
        });
    }
};
