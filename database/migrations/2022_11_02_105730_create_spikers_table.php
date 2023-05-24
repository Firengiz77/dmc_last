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
        Schema::create('spikers', function (Blueprint $table) {
            $table->id();
            
            $table->string('programs_id');
            $table->string('name');
            $table->string('image');
            $table->string('profession');
            $table->string('fb');
            $table->string('linked');
            $table->string('twitter');
            $table->string('instagram');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spikers');
    }
};
