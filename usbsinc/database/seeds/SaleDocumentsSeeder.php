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




        	
        	['user_id' => '2',
			'number' => '456123BH',
			'client_reference' => 'cherry ct',
			'converted_to_order' => '2016-03-14 20:19:49',
			'converted_to_retail_quote' => '2016-03-15 20:19:49',
			'shipped' => '2016-03-16 20:19:49',
			'estimated_arrival' => '2016-03-17 20:19:49',
			'submitted_for_approval' => '2016-03-17 20:19:49',
			'contact_requested' => '',
			'approved' => '2016-03-17 20:19:49',
			'estimated_shipping_date' => '2016-03-17 20:19:49',
			'delivered' => '2016-03-17 20:19:49'],
			


			
			['user_id' => '3',
			'number' => '189123VV',
			'client_reference' => 'cherry ct2',
			'converted_to_order' => '2016-03-17 20:19:49',
			'converted_to_retail_quote' => '2016-03-17 20:19:49',
			'shipped' => '2016-03-17 20:19:49',
			'estimated_arrival' => '2016-03-17 20:19:49',
			'submitted_for_approval' => '2016-03-17 20:19:49',
			'contact_requested' => '',
			'approved' => '2016-03-17 20:19:49',
			'estimated_shipping_date' => '2016-03-17 20:19:49',
			'delivered' => ''],
			
			['user_id' => '3',
			'number' => '756453BH',
			'client_reference' => 'cherry ct3',
			'converted_to_order' => '2015-03-14 20:19:49',
			'converted_to_retail_quote' => '2015-03-15 20:19:49',
			'shipped' => '',
			'estimated_arrival' => '2015-03-17 20:19:49',
			'submitted_for_approval' => '2016-03-17 20:19:49',
			'contact_requested' => '',
			'approved' => '2016-03-17 20:19:49',
			'estimated_shipping_date' => '2016-03-17 20:19:49',
			'delivered' => ''],
			
			['user_id' => '3',
			'number' => '855553VD',
			'client_reference' => 'sanford builders',
			'converted_to_order' => '2016-03-17 20:19:50',
			'converted_to_retail_quote' => '2016-03-17 20:19:49',
			'shipped' => '',
			'estimated_arrival' => '',
			'submitted_for_approval' => '2016-03-17 20:19:49',
			'contact_requested' => '',
			'approved' => '2016-03-17 20:19:49',
			'estimated_shipping_date' => '',
			'delivered' => ''],

			// Added a bunch more

			
        	['user_id' => '2',
			'number' => 'G2-456123BH',
			'client_reference' => 'glass installers, inc.',
			'converted_to_order' => '',
			'converted_to_retail_quote' => '2016-03-17 20:19:49',
			'shipped' => '',
			'estimated_arrival' => '',
			'submitted_for_approval' => '2016-03-17 20:19:49',
			'contact_requested' => '',
			'approved' => '2016-03-17 20:19:49',
			'estimated_shipping_date' => '',
			'delivered' => ''],
			
			['user_id' => '3',
			'number' => 'G2-189123VV',
			'client_reference' => 'glass installers, inc.-2',
			'converted_to_order' => '',
			'converted_to_retail_quote' => '2016-03-17 20:19:49',
			'shipped' => '',
			'estimated_arrival' => '',
			'submitted_for_approval' => '2016-03-17 20:19:49',
			'contact_requested' => '',
			'approved' => '',
			'estimated_shipping_date' => '',
			'delivered' => ''],
			
			['user_id' => '4',
			'number' => 'G2-756453BH',
			'client_reference' => 'rock creek job',
			'converted_to_order' => '',
			'converted_to_retail_quote' => '2016-03-17 20:19:49',
			'shipped' => '',
			'estimated_arrival' => '',
			'submitted_for_approval' => '',
			'contact_requested' => '',
			'approved' => '',
			'estimated_shipping_date' => '',
			'delivered' => ''],
			
			['user_id' => '4',
			'number' => 'G2-855553VD',
			'client_reference' => 'rob withers',
			'converted_to_order' => '',
			'converted_to_retail_quote' => '2016-03-17 20:19:49',
			'shipped' => '',
			'estimated_arrival' => '',
			'submitted_for_approval' => '2016-03-17 20:19:49',
			'contact_requested' => '2016-03-17 20:19:49',
			'approved' => '',
			'estimated_shipping_date' => '',
			'delivered' => ''],
        ]);
    }
}
