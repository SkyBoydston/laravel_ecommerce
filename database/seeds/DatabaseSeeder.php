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
        $this->call(CompanySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BusinessContactSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(PhoneNumberSeeder::class);
        $this->call(SaleDocumentsSeeder::class);
        $this->call(ItemsSeeder::class);
        $this->call(PricesSeeder::class);
        $this->call(MemberCoversSeeder::class);
        $this->call(ItemSaleDocumentSeeder::class);

    }
}
