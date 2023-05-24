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
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
            $table->longtext('home_title');
            $table->longtext('home_desc');
            $table->longtext('home_keyw');
            $table->longtext('blog_title');
            $table->longtext('blog_desc');
            $table->longtext('blog_keyw');
            $table->longtext('register_title');
            $table->longtext('register_desc');
            $table->longtext('register_keyw');
            $table->longtext('sponsor_title');
            $table->longtext('sponsor_desc');
            $table->longtext('sponsor_keyw');
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
        Schema::dropIfExists('metas');
    }
};
