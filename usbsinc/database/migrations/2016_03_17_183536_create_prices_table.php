<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('answer_id')->nullable()->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('company_id')->nullable()->unsigned();
            $table->float('price');
            $table->timestamps();

            $table->foreign('answer_id')
                  ->references('id')->on('answers');

            $table->foreign('user_id')
                  ->references('id')->on('users');    

            $table->foreign('company_id')
                  ->references('id')->on('companies');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prices');
    }
}
