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
                        'first_name' => 'Jeffrey',
		        		'last_name' => 'Way',
                        'email' => 'email@email.com',
						'password' => bcrypt('111111'),
                        'role' => 'admin',
                        'approved_denied_at' => '',

		        	],
		        	[
                        'company_id' => '1',
		        		'first_name' => 'Kent',
                        'last_name' => 'Beck',
                        'email' => 'company@email.com',
						'password' => bcrypt('141414'),
                        'approved_denied_at' => '2015-11-11 04:50:22',
                        'role' => 'company',

		        	],
                    [
                        'company_id' => '2',
                        'first_name' => 'Grady',
                        'last_name' => 'Booch',
                        'email' => 'company2@email.com',
                        'password' => bcrypt('141414'),
                        'role' => 'company',
                        'approved_denied_at' => '2016-03-21 16:01:43'


                    ],
                    [
                        'company_id' => '2',
                        'first_name' => 'Linus',
                        'last_name' => 'Torvalds',
                        'email' => 'agent@email.com',
                        'password' => bcrypt('141414'),
                        'role' => 'agent',
                        'approved_denied_at' => '',


                    ],
                    [
                        'company_id' => '3',
                        'first_name' => 'Alan',
                        'last_name' => 'Turing',
                        'email' => 'pending@email.com',
                        'password' => bcrypt('141414'),
                        'role' => 'pending',
                        'approved_denied_at' => '',


                    ],
                    [
                        'company_id' => '4',
                        'first_name' => 'Taylor',
                        'last_name' => 'Otwell',
                        'email' => 'pending2@email.com',
                        'password' => bcrypt('141414'),
                        'role' => 'pending',
                        'approved_denied_at' => '',


                    ],

        	]);
    }
}
