<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('business_contact_id')->nullable()->unsigned();
            $table->integer('company_id')->nullable()->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('primary_phone');
            $table->string('secondary_phone');
            $table->timestamps();

            $table->foreign('business_contact_id')
                  ->references('id')->on('business_contacts');

            $table->foreign('company_id')
                  ->references('id')->on('companies');

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
        Schema::drop('phone_numbers');
    }
}
