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
            $table->integer('company_id')->nullable()->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('item_id')->nullable()->unsigned();
            $table->integer('sale_document_id')->nullable()->unsigned();


            $table->string('brand');
            $table->string('category');

            $table->decimal('price_modifier_percentage', 15, 2)->default(1.00)->nullable();
            $table->decimal('price_modifier_amount', 15, 2)->default(0.00)->nullable();
            $table->timestamps();


            $table->foreign('user_id')   
                  ->references('id')->on('users');    

            $table->foreign('company_id')
                  ->references('id')->on('companies');

            $table->foreign('item_id')
                  ->references('id')->on('items');  //This relationship probably won't be used because the sale document relationship should be sufficient to select the right prices for retail quotes.
            
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
        Schema::drop('prices');
    }
}
