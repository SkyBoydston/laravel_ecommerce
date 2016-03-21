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
		        		'first_name' => 'test first_name',
						'last_name' => 'test last_name',
						'title' => 'test title',
						
		        	],
		        	[
    					'company_id' => '2',
		        		'first_name' => 'another test first_name',
						'last_name' => 'another test last_name',
						'title' => 'another test title',
						
		        	],
                    [
                        'company_id' => '3',
                        'first_name' => 'pending test first_name',
                        'last_name' => 'pending test last_name',
                        'title' => 'pending 1 test title',
                        
                    ],
                    [
                        'company_id' => '4',
                        'first_name' => 'another pending test first_name',
                        'last_name' => 'another pending test last_name',
                        'title' => 'pending 2 test title',
                        
                    ],
    		]);
    }
}
