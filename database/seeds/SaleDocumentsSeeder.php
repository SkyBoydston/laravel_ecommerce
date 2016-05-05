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
			'number' => '1462155550',
			'client_reference' => 'cherry creek computing',
			'notes' => 'This is a smaller client.',
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
			'number' => '1462155334',
			'client_reference' => 'Samantha Jones',
			'notes' => 'Customer is upgrading her machine.',
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
			'number' => '1462155744',
			'client_reference' => 'Don Chaves',
			'notes' => '',
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
			'number' => '1462155131',
			'client_reference' => 'sanford IT',
			'notes' => 'High volume client.',
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
			'number' => '1462155722',
			'client_reference' => 'tech installers, inc.',
			'notes' => 'Needs to pickup Saturday.',
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
			'number' => '1462155755',
			'client_reference' => 'Michael Tampers',
			'notes' => 'Advise customer of specials.',
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
			'number' => '1462155568',
			'client_reference' => 'Rock Creek',
			'notes' => '',
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
			'number' => '1462155223',
			'client_reference' => 'rob withers',
			'notes' => '',
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
