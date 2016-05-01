<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberCoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_covers', function(Blueprint $table) {
            $table->increments('id');
            $table->mediumtext('news');
            $table->mediumtext('promotions');
            $table->mediumtext('webinars');
            $table->mediumtext('financial');
            $table->mediumtext('social_media_links');

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
        Schema::drop('member_covers');
    }
}
