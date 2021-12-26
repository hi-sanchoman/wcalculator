<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncrementsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('increments', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('material_id')->unsigned();
            $table->string('name');
            $table->float('width');
            $table->integer('price')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('material_id')->references('id')->on('materials')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('increments');
    }
}
