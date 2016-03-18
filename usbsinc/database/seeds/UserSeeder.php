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
                        'company_id' => null,
                        'first_name' => 'Admin',
		        		'last_name' => 'test last name',
                        'email' => 'email@email.com',
						'password' => bcrypt('111111'),
                        'role' => 'admin'
		        	],
		        	[
                        'company_id' => '1',
		        		'first_name' => 'Company owner 1',
                        'last_name' => 'test last name',
                        'email' => 'company@email.com',
						'password' => bcrypt('111111'),
                        'role' => 'company'

		        	],
                    [
                        'company_id' => '2',
                        'first_name' => 'Company owner 2',
                        'last_name' => 'test last name',
                        'email' => 'company2@email.com',
                        'password' => bcrypt('111111'),
                        'role' => 'company'

                    ],
                    [
                        'company_id' => '2',
                        'first_name' => 'Agent',
                        'last_name' => 'test last name',
                        'email' => 'agent@email.com',
                        'password' => bcrypt('111111'),
                        'role' => 'agent'

                    ],

        	]);
    }
}
