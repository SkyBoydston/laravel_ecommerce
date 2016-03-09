<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('website');
            $table->string('type');
            $table->string('status');
            $table->string('brands_of_interest');
            $table->string('contact_me_via');
            $table->mediumtext('how_heard_about');
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
        Schema::drop('companies');
    }
}
