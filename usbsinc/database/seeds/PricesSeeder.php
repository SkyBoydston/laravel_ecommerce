<?php 

use Illuminate\Database\Seeder;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
        	[
            'user_id' => null,
            'company_id' => '1',
            'item_id' => null,
            'sale_document_id' => null,
            'brand' => null,
            'category' => 'Gutter',
            'price_modifier_percentage' => 100.1,
            'price_modifier_amount' => 0,
             ],
             [
            'user_id' => null,
            'company_id' => '1',
            'item_id' => null,
            'sale_document_id' => null,
            'brand' => null,
            'category' => 'Window',
            'price_modifier_percentage' => 100.1,
            'price_modifier_amount' => 0,
             ],
             [
            'user_id' => null,
            'company_id' => '1',
            'item_id' => null,
            'sale_document_id' => null,
            'brand' => '',
            'category' => 'Door',
            'price_modifier_percentage' => 100.1,
            'price_modifier_amount' => 0,
             ],
             [
            'user_id' => null,
            'company_id' => '2',
            'item_id' => null,
            'sale_document_id' => null,
            'brand' => null,
            'category' => 'Door',
            'price_modifier_percentage' => 200.1,
            'price_modifier_amount' => 0,
             ],


            


             [
            'user_id' => '4',
            'company_id' => null,
            'item_id' => null,
            'sale_document_id' => null,
            'brand' => '',
            'category' => 'Window',
            'price_modifier_percentage' => 100.1,
            'price_modifier_amount' => 0,
             ],
             [
            'user_id' => '4',
            'company_id' => null,
            'item_id' => null,
            'sale_document_id' => null,
            'brand' => 'Milgard',
            'category' => null,
            'price_modifier_percentage' => 100.1,
            'price_modifier_amount' => 0,
             ],
             [
            'user_id' => null,
            'company_id' => null,
            'item_id' => '1',
            'sale_document_id' => '8',
            'brand' => '',
            'category' => '',
            'price_modifier_percentage' => 500.1,
            'price_modifier_amount' => 0,
             ],
             [
             'user_id' => null,
             'company_id' => null,
             'item_id' => '2',
             'sale_document_id' => '8',
             'brand' => '',
             'category' => '',
             'price_modifier_percentage' => 100.00,
             'price_modifier_amount' => 50000,
              ],
        ]);
    }
}
