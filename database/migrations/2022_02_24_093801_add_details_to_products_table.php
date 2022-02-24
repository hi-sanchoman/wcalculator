<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->text('column1')->nullable();
            $table->text('column2')->nullable();
            $table->text('column3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('description', function (Blueprint $table) {
            $table->dropColumn('products');
            $table->dropColumn('column1');
            $table->dropColumn('column2');
            $table->dropColumn('column3');
        });
    }
}
