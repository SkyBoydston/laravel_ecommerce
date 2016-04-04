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

            $table->timestamp('submitted_for_approval');  // Agent submits quote for approval, pending status for agent and admin
            $table->timestamp('contact_requested');  // Contact rep
            $table->timestamp('approved'); // Ready to submit status. Company or agent will convert to order.
            $table->timestamp('converted_to_order'); // Is quote or order, goes to in processing (or pending in admin view)
            $table->timestamp('converted_to_retail_quote');
            $table->timestamp('estimated_shipping_date');  // Estimated  // Status here is in production
            $table->timestamp('estimated_arrival');  // Estimate
            $table->timestamp('shipped');  // Actually shipped
            $table->timestamp('delivered'); // Actual arrival time

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
