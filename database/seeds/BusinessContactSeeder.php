<?php

use Illuminate\Database\Seeder;

class BusinessContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('business_contacts')->insert([
    				[
    					'company_id' => '1',
		        		'first_name' => 'Frederick',
						'last_name' => 'Ramirez',
						'title' => 'Owner',
						
		        	],
		        	[
    					'company_id' => '2',
		        		'first_name' => 'Darlene',
						'last_name' => 'Thompson',
						'title' => 'CFO',
						
		        	],
                    [
                        'company_id' => '3',
                        'first_name' => 'Dylan',
                        'last_name' => 'Westerbach',
                        'title' => 'CEO',
                        
                    ],
                    [
                        'company_id' => '4',
                        'first_name' => 'Sarah',
                        'last_name' => 'Sundberg',
                        'title' => 'Manager',
                        
                    ],
    		]);
    }
}
