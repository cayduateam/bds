<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('alias');
            $table->text('content')->nullable();
            $table->text('image')->nullable();
            $table->string('section1_title')->nullable();
            $table->text('section1')->nullable();
            $table->string('section2_title')->nullable();
            $table->text('section2')->nullable();
            $table->string('section3_title')->nullable();
            $table->text('section3')->nullable();
            $table->string('section4_title')->nullable();
            $table->text('section4')->nullable();
            $table->string('section5_title')->nullable();
            $table->text('section5')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
