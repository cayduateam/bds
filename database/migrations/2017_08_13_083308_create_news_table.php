<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cateogry_id');
            $table->string('title');
            $table->string('alias');
            $table->text('summary')->nullable();
            $table->text('content')->nullable();
            $table->string('image_slide')->nullable();
            $table->string('image')->nullable();
            $table->integer('hit')->nullable();
            $table->text('metakey')->nullable();
            $table->text('metades')->nullable();
            $table->text('metarobot')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('news');
    }
}
