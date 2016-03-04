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
						'address_line_1' => 'test business_address line1',
						'address_line_2' => 'test business_address line2',
						'city' => 'test city',
						'state' => 'test state',
						'zip_code' => 'test zip_code',
						
		        	],
		        	[
		        		'address_line_1' => 'another test business_address line1',
						'address_line_2' => 'another test business_address line2',
						'city' => 'another test city',
						'state' => 'another test state',
						'zip_code' => 'another test zip_code',
						
		        	],
        	]);
    }
}
