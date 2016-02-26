<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
		        	[
		        		'business_name' => 'test business_name',
						'business_type' => 'test business_type',
						'business_status' => 'test business_status',
						'business_address_line1' => 'test business_address line1',
						'business_address_line2' => 'test business_address line2',
						'business_city' => 'test city',
						'business_state' => 'test state',
						'business_zip_code' => 'test zip_code',
						'brands_of_interest' => 'test brands_of_interest',
						'business_contact_first_name' => 'test first_name',
						'business_contact_last_name' => 'test last_name',
						'business_contact_title' => 'test title',
						'business_primary_phone' => 'test primary_phone',
						'business_secondary_phone' => 'test secondary_phone',
						'contact_me_via' => 'test contact_me_via',
						'business_contact_email' => 'email@email.com',
						'how_heard_about' => 'test how_heard_about',
						'password' => bcrypt('111111'),
		        	],
		        	[
		        		'business_name' => 'another test business_name',
						'business_type' => 'another test business_type',
						'business_status' => 'another test business_status',
						'business_address_line1' => 'another test business_address line1',
						'business_address_line2' => 'another test business_address line2',
						'business_city' => 'another test city',
						'business_state' => 'another test state',
						'business_zip_code' => 'another test zip_code',
						'brands_of_interest' => 'another test brands_of_interest',
						'business_contact_first_name' => 'another test first_name',
						'business_contact_last_name' => 'another test last_name',
						'business_contact_title' => 'another test title',
						'business_primary_phone' => 'another test primary_phone',
						'business_secondary_phone' => 'another test secondary_phone',
						'contact_me_via' => 'another test contact_me_via',
						'business_contact_email' => 'anotheremail@email.com',
						'how_heard_about' => 'another test how_heard_about',
						'password' => bcrypt('222222'),
		        	],
        	]);
    }
}
