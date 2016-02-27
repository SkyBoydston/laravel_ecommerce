<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business_name');
            $table->string('business_type');
            $table->string('business_status');
            $table->string('business_address_line1');
            $table->string('business_address_line2');
            $table->string('business_city');
            $table->string('business_state');
            $table->string('business_zip_code');
            $table->string('business_contact_first_name');
            $table->string('business_contact_last_name');
            $table->string('business_contact_title');
            
            $table->string('brands_of_interest');
            $table->string('business_primary_phone');
            $table->string('business_secondary_phone');
            $table->string('contact_me_via');

            $table->string('email')->unique();
            $table->mediumtext('how_heard_about');
            $table->string('password', 60);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
