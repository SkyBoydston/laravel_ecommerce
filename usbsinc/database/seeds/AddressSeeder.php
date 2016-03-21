<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
        			[
        				'company_id' => '1',
						'address_line_1' => 'test business_address line1',
						'address_line_2' => 'test business_address line2',
						'city' => 'test city',
						'state' => 'test state',
						'zip_code' => 'test zip_code',
						'type' => 'office'
						
		        	],
		        	[
        				'company_id' => '1',
						'address_line_1' => 'test business_address line1',
						'address_line_2' => 'test business_address line2',
						'city' => 'test city',
						'state' => 'test state',
						'zip_code' => 'test zip_code',
						'type' => 'default_shipping'
						
		        	],
		        	[
        				'company_id' => '2',
		        		'address_line_1' => 'another test business_address line1',
						'address_line_2' => 'another test business_address line2',
						'city' => 'another test city',
						'state' => 'another test state',
						'zip_code' => 'another test zip_code',
						'type' => 'office'
						
		        	],
		        	[
        				'company_id' => '2',
		        		'address_line_1' => 'another test business_address line1',
						'address_line_2' => 'another test business_address line2',
						'city' => 'another test city',
						'state' => 'another test state',
						'zip_code' => 'another test zip_code',
						'type' => 'default_shipping'
						
		        	],
		        	[
        				'company_id' => '3',
		        		'address_line_1' => 'pending test business_address line1',
						'address_line_2' => 'pending test business_address line2',
						'city' => 'pending test city',
						'state' => 'pending test state',
						'zip_code' => 'pending test zip_code',
						'type' => 'office'
						
		        	],
		        	[
        				'company_id' => '4',
		        		'address_line_1' => 'another pending test business_address line1',
						'address_line_2' => 'another pending test business_address line2',
						'city' => 'another pending test city',
						'state' => 'another pending test state',
						'zip_code' => 'another pending test zip_code',
						'type' => 'office'
						
		        	],
        	]);
    }
}
