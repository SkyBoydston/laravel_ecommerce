<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('number');
            $table->timestamp('converted_to_order')->nullable();
            $table->timestamp('converted_to_retail_quote')->nullable();
            $table->timestamp('shipped')->nullable();
            $table->timestamp('estimated_arrival')->nullable();

            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')->on('users');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sale_documents');
    }
}
