<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('category_id')->unsigned();
            $table->string('slug')->unique();
            $table->string('name');
            $table->integer('price')->unsigned();
            $table->string('type');
            $table->float('width')->unsigned();
            $table->float('size')->unsigned();
            $table->integer('price_el')->unsigned();
            $table->integer('price_kedr')->unsigned();
            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
