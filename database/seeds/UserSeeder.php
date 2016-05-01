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
                        'role' => 'admin',
                        'approved_denied_at' => '',

		        	],
		        	[
                        'company_id' => '1',
		        		'first_name' => 'Company owner 1',
                        'last_name' => 'test last name',
                        'email' => 'company@email.com',
						'password' => bcrypt('111111'),
                        'approved_denied_at' => '2015-11-11 04:50:22',
                        'role' => 'company',

		        	],
                    [
                        'company_id' => '2',
                        'first_name' => 'Company owner 2',
                        'last_name' => 'test last name',
                        'email' => 'company2@email.com',
                        'password' => bcrypt('111111'),
                        'role' => 'company',
                        'approved_denied_at' => '2016-03-21 16:01:43'


                    ],
                    [
                        'company_id' => '2',
                        'first_name' => 'Agent',
                        'last_name' => 'test last name',
                        'email' => 'agent@email.com',
                        'password' => bcrypt('111111'),
                        'role' => 'agent',
                        'approved_denied_at' => '',


                    ],
                    [
                        'company_id' => '3',
                        'first_name' => 'Pending user',
                        'last_name' => 'test last name',
                        'email' => 'pending@email.com',
                        'password' => bcrypt('111111'),
                        'role' => 'pending',
                        'approved_denied_at' => '',


                    ],
                    [
                        'company_id' => '4',
                        'first_name' => 'Another pending user',
                        'last_name' => 'test last name',
                        'email' => 'pending2@email.com',
                        'password' => bcrypt('111111'),
                        'role' => 'pending',
                        'approved_denied_at' => '',


                    ],

        	]);
    }
}
