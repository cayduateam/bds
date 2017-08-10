<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCat');
            $table->string('name');
            $table->string('alias');
            $table->string('sku');
            $table->string('address');
            $table->text('note');
            $table->text('description');
            $table->text('special');
            $table->integer('price');
            $table->integer('price-special');
            $table->tinyInteger('status');
            $table->integer('view');
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
        Scheme::drop('product');
    }
}
