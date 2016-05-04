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
						'address_line_1' => '2323 South Princeton Ave.',
						'address_line_2' => 'Ste. 83',
						'city' => 'Boston',
						'state' => 'MA',
						'zip_code' => '15571',
						'type' => 'office'
						
		        	],
		        	[
        				'company_id' => '1',
						'address_line_1' => '17899 E. Willems Blvd.',
						'address_line_2' => '',
						'city' => 'Boston',
						'state' => 'MA',
						'zip_code' => '15562',
						'type' => 'default_shipping'
						
		        	],
		        	[
        				'company_id' => '2',
		        		'address_line_1' => '6600 Dartmouth St.',
						'address_line_2' => 'J-26',
						'city' => 'Denver',
						'state' => 'CO',
						'zip_code' => '80127',
						'type' => 'office'
						
		        	],
		        	[
        				'company_id' => '2',
		        		'address_line_1' => '6600 Dartmouth St.',
						'address_line_2' => 'J-24',
						'city' => 'Denver',
						'state' => 'CO',
						'zip_code' => '80127',
						'type' => 'default_shipping'
						
		        	],
		        	[
        				'company_id' => '3',
		        		'address_line_1' => '286 E. Tropicana Ave.',
						'address_line_2' => '',
						'city' => 'Las Vegas',
						'state' => 'NV',
						'zip_code' => '92278',
						'type' => 'office'
						
		        	],
		        	[
        				'company_id' => '4',
		        		'address_line_1' => '1217 S. Cuchara Dr.',
						'address_line_2' => '',
						'city' => 'Denver',
						'state' => 'CO',
						'zip_code' => '80025',
						'type' => 'office'
						
		        	],
        	]);
    }
}
