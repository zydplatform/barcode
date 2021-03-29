<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->unsigned();
            // $table->unsignedBigInteger('userproduct_id');
            // $table->foreign('userproduct_id')->references('id')->on('companies')->onDelete('cascade');
            $table->string('productname');
            $table->BigInteger('productprice');
            $table->string('productbrand');
            $table->string('productdetails');
            $table->string('productqty');
            $table->dateTime('mfgdate');
            $table->dateTime('expdate');
            $table->integer('item_reference_number')->unique()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->foreign('user_id')->references('id')->on('companies')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
