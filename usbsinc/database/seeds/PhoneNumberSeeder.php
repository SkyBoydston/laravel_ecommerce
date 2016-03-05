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
                        'user_id' => '1',
		        		'primary_phone' => 'test primary_phone',
						'secondary_phone' => 'test secondary_phone',
					],
		        	[
                        'user_id' => '2',
		        		'primary_phone' => 'another test primary_phone',
						'secondary_phone' => 'another test secondary_phone',
					],
        	]);
    }
}
