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
		        		'business_name' => 'test business_name',
		        		'website' => 'www.business_website.com',
						'type' => 'test business_type',
						'status' => 'test business_status',
						'brands_of_interest' => 'test brands_of_interest',
						'contact_me_via' => 'test contact_me_via',
						'how_heard_about' => 'test how_heard_about',
					],
		        	[
		        		'business_name' => 'another test business_name',
		        		'website' => 'another test business_website',
						'type' => 'another test business_type',
						'status' => 'another test business_status',
						'brands_of_interest' => 'another test brands_of_interest',
						'contact_me_via' => 'another test contact_me_via',
						'how_heard_about' => 'another test how_heard_about',
					],
					[   // Pending company
		        		'business_name' => 'pending test business_name',
		        		'website' => 'pending test business_website',
						'type' => 'pending test business_type',
						'status' => 'pending test business_status',
						'brands_of_interest' => 'pending test brands_of_interest',
						'contact_me_via' => 'pending test contact_me_via',
						'how_heard_about' => 'pending test how_heard_about',
					],
					[   //Pending company
		        		'business_name' => 'another pending test business_name',
		        		'website' => 'another pending test business_website',
						'type' => 'another pending test business_type',
						'status' => 'another pending test business_status',
						'brands_of_interest' => 'another pending test brands_of_interest',
						'contact_me_via' => 'another pending test contact_me_via',
						'how_heard_about' => 'another pending test how_heard_about',
					],
        	]);
    }
}
