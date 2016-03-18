<?php

use Illuminate\Database\Seeder;

class SaleDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sale_documents')->insert([
        	// Completed, shipped, arrived
        	['user_id' => '2',
			'number' => '456123BH',
			'converted_to_order' => '2016-03-14 20:19:49',
			'converted_to_retail_quote' => '2016-03-15 20:19:49',
			'shipped' => '2016-03-16 20:19:49',
			'estimated_arrival' => '2016-03-17 20:19:49'],
			// Only converted to retail
			['user_id' => '3',
			'number' => '189123VV',
			'converted_to_order' => '',
			'converted_to_retail_quote' => '2016-03-17 20:19:49',
			'shipped' => '',
			'estimated_arrival' => ''],
			// Totally complete
			['user_id' => '3',
			'number' => '756453BH',
			'converted_to_order' => '2015-03-14 20:19:49',
			'converted_to_retail_quote' => '2015-03-15 20:19:49',
			'shipped' => '2015-03-16 20:19:49',
			'estimated_arrival' => '2015-03-17 20:19:49'],
			// Ready to ship
			['user_id' => '3',
			'number' => '855553VD',
			'converted_to_order' => '2016-03-17 20:19:50',
			'converted_to_retail_quote' => '2016-03-17 20:19:49',
			'shipped' => '',
			'estimated_arrival' => ''],

			// Added a bunch more

			// Only quoted
        	['user_id' => '2',
			'number' => 'G2-456123BH',
			'converted_to_order' => '',
			'converted_to_retail_quote' => '',
			'shipped' => '',
			'estimated_arrival' => ''],
			// Never converted to retail but shipped
			['user_id' => '3',
			'number' => 'G2-189123VV',
			'converted_to_order' => '2016-03-17 20:19:49',
			'converted_to_retail_quote' => '',
			'shipped' => '2016-03-17 20:19:49',
			'estimated_arrival' => '2016-03-17 20:19:49'],
			// Never converted to retail
			['user_id' => '4',
			'number' => 'G2-756453BH',
			'converted_to_order' => '',
			'converted_to_retail_quote' => '',
			'shipped' => '',
			'estimated_arrival' => ''],
			// Ready to ship
			['user_id' => '4',
			'number' => 'G2-855553VD',
			'converted_to_order' => '2016-03-17 20:19:50',
			'converted_to_retail_quote' => '2016-03-17 20:19:49',
			'shipped' => '',
			'estimated_arrival' => ''],
        ]);
    }
}
