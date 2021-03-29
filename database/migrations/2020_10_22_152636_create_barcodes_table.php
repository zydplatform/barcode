<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gs1prefix');
            $table->string('companyprefix');
            $table->string('barcode-type');
            $table->string('barcodequantity');
            $table->BigInteger('barcode');
            $table->binary('barcode-image');
            $table->integer('item_id')->index()->unsigned();
            $table->foreign('item_id')->references('item_reference_number')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('barcodes');
    }
}
