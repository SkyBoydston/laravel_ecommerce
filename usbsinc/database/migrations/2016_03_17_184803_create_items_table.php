<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sale_document_id')->nullable()->unsigned();
            
            $table->string('number');

            $table->string('option_1');
            $table->string('option_2');
            $table->string('option_3');
            $table->string('option_4');
            $table->string('option_5');
            $table->string('option_6');

            $table->string('how_many_screws');
            $table->float('shipping_weight');
            
            $table->timestamps();

            $table->foreign('sale_document_id')
                  ->references('id')->on('sale_documents');

            // $table->foreign('option_1')
            //       ->references('id')->on('answers');
            // $table->foreign('option_2')
            //       ->references('id')->on('answers');
            // $table->foreign('option_3')
            //       ->references('id')->on('answers');
            // $table->foreign('option_4')
            //       ->references('id')->on('answers');
            // $table->foreign('option_5')
            //       ->references('id')->on('answers');
            // $table->foreign('option_6')
            //       ->references('id')->on('answers');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
