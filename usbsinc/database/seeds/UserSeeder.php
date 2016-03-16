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
                        'company_id' => '1',
                        'first_name' => 'test first name',
		        		'last_name' => 'test last name',
                        'email' => 'email@email.com',
						'password' => bcrypt('111111'),
                        'role' => 'admin'
		        	],
		        	[
                        'company_id' => '2',
		        		'first_name' => 'test first name',
                        'last_name' => 'test last name',
                        'email' => 'company@email.com',
						'password' => bcrypt('111111'),
                        'role' => 'company'

		        	],
                    [
                        'company_id' => '2',
                        'first_name' => 'test first name',
                        'last_name' => 'test last name',
                        'email' => 'agent@email.com',
                        'password' => bcrypt('111111'),
                        'role' => 'agent'

                    ],

        	]);
    }
}
