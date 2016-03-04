<?php

use Illuminate\Database\Seeder;

class PhoneNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phone_numbers')->insert([
        			[
		        		'primary_phone' => 'test primary_phone',
						'secondary_phone' => 'test secondary_phone',
					],
		        	[
		        		'primary_phone' => 'another test primary_phone',
						'secondary_phone' => 'another test secondary_phone',
					],
        	]);
    }
}
