<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(BusinessContactSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(PhoneNumberSeeder::class);
    }
}
