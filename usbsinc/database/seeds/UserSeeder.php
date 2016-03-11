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
                        'first_name' => 'test first name',
		        		'last_name' => 'test last name',
                        'email' => 'email@email.com',
						'password' => bcrypt('111111'),
		        	],
		        	[
		        		'first_name' => 'test first name',
                        'last_name' => 'test last name',
                        'email' => 'anotheremail@email.com',
						'password' => bcrypt('222222'),
		        	],
        	]);
    }
}
