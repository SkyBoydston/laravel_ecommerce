<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemSaleDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_sale_document', function (Blueprint $table){
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->integer('sale_document_id')->unsigned();
            $table->timestamps();

            $table->foreign('item_id')
                  ->references('id')->on('items');
            $table->foreign('sale_document_id')
                  ->references('id')->on('sale_documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('item_sale_document');
    }
}
