<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
        			[
        				'user_id' => '1',
		        		'name' => 'test business_name',
		        		'website' => 'www.business_website.com',
						'type' => 'test business_type',
						'status' => 'test business_status',
						'brands_of_interest' => 'test brands_of_interest',
						'contact_me_via' => 'test contact_me_via',
						'how_heard_about' => 'test how_heard_about',
					],
		        	[
        				'user_id' => '2',
		        		'name' => 'another test business_name',
		        		'website' => 'another test business_website',
						'type' => 'another test business_type',
						'status' => 'another test business_status',
						'brands_of_interest' => 'another test brands_of_interest',
						'contact_me_via' => 'another test contact_me_via',
						'how_heard_about' => 'another test how_heard_about',
					],
        	]);
    }
}
