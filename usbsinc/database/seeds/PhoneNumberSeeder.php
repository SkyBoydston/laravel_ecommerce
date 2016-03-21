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
                        'business_contact_id' => '1',
                        'company_id' => null,
                        'user_id' => null,
		        		'primary_phone' => 'test primary_phone',
						'secondary_phone' => 'test secondary_phone',
					],
		        	[
                        'business_contact_id' => '2',
                        'company_id' => null,
                        'user_id' => null,
		        		'primary_phone' => 'another test primary_phone',
						'secondary_phone' => 'another test secondary_phone',
					],
                    [
                        'business_contact_id' => null,
                        'company_id' => '1',
                        'user_id' => null,
                        'primary_phone' => 'test primary_phone',
                        'secondary_phone' => 'test secondary_phone',
                    ],
                    [
                        'business_contact_id' => null,
                        'company_id' => '2',
                        'user_id' => null,
                        'primary_phone' => 'another test primary_phone',
                        'secondary_phone' => 'another test secondary_phone',
                    ],
                    [
                        'business_contact_id' => null,
                        'company_id' => null,
                        'user_id' => '1',
                        'primary_phone' => 'test primary_phone',
                        'secondary_phone' => 'test secondary_phone',
                    ],
                    [
                        'business_contact_id' => null,
                        'company_id' => null,
                        'user_id' => '2',
                        'primary_phone' => 'another test primary_phone',
                        'secondary_phone' => 'another test secondary_phone',
                    ],
                    [
                        'business_contact_id' => '3',
                        'company_id' => null,
                        'user_id' => null,
                        'primary_phone' => 'test primary_phone',
                        'secondary_phone' => 'test secondary_phone',
                    ],
                    [
                        'business_contact_id' => '4',
                        'company_id' => null,
                        'user_id' => null,
                        'primary_phone' => 'test primary_phone',
                        'secondary_phone' => 'test secondary_phone',
                    ],
                    [
                        'business_contact_id' => null,
                        'company_id' => '3',
                        'user_id' => null,
                        'primary_phone' => 'pending test primary_phone',
                        'secondary_phone' => 'pending test secondary_phone',
                    ],
                    [
                        'business_contact_id' => null,
                        'company_id' => '4',
                        'user_id' => null,
                        'primary_phone' => 'another pending test primary_phone',
                        'secondary_phone' => 'another pending test secondary_phone',
                    ],
        	]);
    }
}
