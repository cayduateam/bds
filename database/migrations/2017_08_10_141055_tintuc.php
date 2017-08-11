<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCat');
            $table->string('title');
            $table->string('alias');
            $table->text('summary');
            $table->text('content');
            $table->string('image-slide');
            $table->string('image');
            $table->integer('hit');
            $table->text('metakey');
            $table->text('metades');
            $table->text('metarobot');
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
        Schema::drop('tintuc');
    }
}
