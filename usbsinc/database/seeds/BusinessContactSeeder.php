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
		        		'first_name' => 'test first_name',
						'last_name' => 'test last_name',
						'title' => 'test title',
						
		        	],
		        	[
		        		'first_name' => 'another test first_name',
						'last_name' => 'another test last_name',
						'title' => 'another test title',
						
		        	],
    		]);
    }
}
