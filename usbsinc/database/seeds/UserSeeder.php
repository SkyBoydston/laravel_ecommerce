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
						'business_address' => 'test business_address',
						'city' => 'test city',
						'state' => 'test state',
						'zip_code' => 'test zip_code',
						'brands_of_interest' => 'test brands_of_interest',
						'first_name' => 'test first_name',
						'last_name' => 'test last_name',
						'title' => 'test title',
						'primary_phone' => 'test primary_phone',
						'secondary_phone' => 'test secondary_phone',
						'contact_me_via' => 'test contact_me_via',
						'email' => 'email@email.com',
						'how_heard_about' => 'test how_heard_about',
						'password' => bcrypt('111111'),
		        	],
		        	[
		        		'business_name' => 'another test business_name',
						'business_type' => 'another test business_type',
						'business_status' => 'another test business_status',
						'business_address' => 'another test business_address',
						'city' => 'another test city',
						'state' => 'another test state',
						'zip_code' => 'another test zip_code',
						'brands_of_interest' => 'another test brands_of_interest',
						'first_name' => 'another test first_name',
						'last_name' => 'another test last_name',
						'title' => 'another test title',
						'primary_phone' => 'another test primary_phone',
						'secondary_phone' => 'another test secondary_phone',
						'contact_me_via' => 'another test contact_me_via',
						'email' => 'anotheremail@email.com',
						'how_heard_about' => 'another test how_heard_about',
						'password' => bcrypt('222222'),
		        	],
        	]);
    }
}
