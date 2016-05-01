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
            $table->string('business_name');
            $table->string('website');
            $table->string('type');
            $table->string('status');
            $table->string('brands_of_interest');
            $table->string('contact_me_via');
            $table->string('logo');
            $table->mediumtext('how_heard_about');
            $table->mediumtext('notes');
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
        Schema::drop('companies');
    }
}
