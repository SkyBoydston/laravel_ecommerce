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
		        		'email' => 'email@email.com',
						'password' => bcrypt('111111'),
		        	],
		        	[
		        		'email' => 'anotheremail@email.com',
						'password' => bcrypt('222222'),
		        	],
        	]);
    }
}
