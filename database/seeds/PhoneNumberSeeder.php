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
		        		'primary_phone' => '851-660-7825',
						'secondary_phone' => '851-499-3219',
					],
		        	[
                        'business_contact_id' => '2',
                        'company_id' => null,
                        'user_id' => null,
		        		'primary_phone' => '720-919-7225',
						'secondary_phone' => '720-448-4896',
					],
                    [
                        'business_contact_id' => null,
                        'company_id' => '1',
                        'user_id' => null,
                        'primary_phone' => '552-456-7892',
                        'secondary_phone' => '',
                    ],
                    [
                        'business_contact_id' => null,
                        'company_id' => '2',
                        'user_id' => null,
                        'primary_phone' => '662-894-2220',
                        'secondary_phone' => '',
                    ],
                    [
                        'business_contact_id' => null,
                        'company_id' => null,
                        'user_id' => '1',
                        'primary_phone' => '770-880-9913',
                        'secondary_phone' => '770-445-5589',
                    ],
                    [
                        'business_contact_id' => null,
                        'company_id' => null,
                        'user_id' => '2',
                        'primary_phone' => '313-552-4669',
                        'secondary_phone' => '',
                    ],
                    [
                        'business_contact_id' => '3',
                        'company_id' => null,
                        'user_id' => null,
                        'primary_phone' => '303-494-2280',
                        'secondary_phone' => '303-552-7720',
                    ],
                    [
                        'business_contact_id' => '4',
                        'company_id' => null,
                        'user_id' => null,
                        'primary_phone' => '616-882-0059',
                        'secondary_phone' => '616-788-2015',
                    ],
                    [
                        'business_contact_id' => null,
                        'company_id' => '3',
                        'user_id' => null,
                        'primary_phone' => '412-550-6193',
                        'secondary_phone' => '412-797-3379',
                    ],
                    [
                        'business_contact_id' => null,
                        'company_id' => '4',
                        'user_id' => null,
                        'primary_phone' => '550-726-1563',
                        'secondary_phone' => '',
                    ],
        	]);
    }
}
