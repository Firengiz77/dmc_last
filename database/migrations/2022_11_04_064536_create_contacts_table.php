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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->longtext('title');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->longtext('fb');
            $table->longtext('instagram');
            $table->longtext('linked');
            $table->longtext('youtube');
            $table->longtext('address');
            $table->string('email');
            $table->longtext('image');

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
        Schema::dropIfExists('contacts');
    }
};
