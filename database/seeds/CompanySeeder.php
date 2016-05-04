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
		        		'business_name' => 'Northeastern Tech Supply',
		        		'website' => 'www.northeasterntech.com',
						'type' => 'B2C',
						'status' => 'Active',
						'brands_of_interest' => 'Dell, Toshiba',
						'contact_me_via' => 'Email',
						'how_heard_about' => 'I ran across your website while I was searching for parts for a project.',
					],
		        	[
		        		'business_name' => 'PFG Computing, Inc.',
		        		'website' => 'www.pfg-computing.com',
						'type' => 'B2B',
						'status' => 'Active',
						'brands_of_interest' => 'Sony, HP, Dell',
						'contact_me_via' => 'Phone',
						'how_heard_about' => 'We were looking for a supplier for parts and got a recommendation for you.',
					],
					[   // Pending company
		        		'business_name' => 'Altech, Ltd.',
		        		'website' => 'altech.com',
						'type' => 'B2C',
						'status' => 'Active',
						'brands_of_interest' => 'HP, Sony, Toshiba, Acer',
						'contact_me_via' => 'Email',
						'how_heard_about' => 'A friend of mine works at your company.',
					],
					[   //Pending company
		        		'business_name' => 'Colorado Digital Services, LLC',
		        		'website' => 'www.cds-llc.net',
						'type' => 'B2B',
						'status' => 'Active',
						'brands_of_interest' => 'HP, Dell',
						'contact_me_via' => 'Phone',
						'how_heard_about' => 'Walk-in',
					],
        	]);
    }
}
