<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemeIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_ideas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 60);
            $table->text('description')->nullable();
            $table->integer('score')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->integer('user_id')->unsigned();            
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theme_ideas');
    }
}
