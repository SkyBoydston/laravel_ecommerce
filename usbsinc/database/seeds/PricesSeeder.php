<?php

use Illuminate\Database\Seeder;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
        	['answer_id' => '1', 'price' => '453.13'],
        	['answer_id' => '2', 'price' => '156.23'],
        	['answer_id' => '3', 'price' => '456.89'],
        	['answer_id' => '4', 'price' => '819.89'],
        	['answer_id' => '5', 'price' => '7891.84'],
        	['answer_id' => '6', 'price' => '8.46'],
        	['answer_id' => '7', 'price' => '89.48'],
        	['answer_id' => '8', 'price' => '76.45'],
        	['answer_id' => '9', 'price' => '156.45'],
        	['answer_id' => '10', 'price' => '891.53'],
        	['answer_id' => '11', 'price' => '735.51'],
        	['answer_id' => '12', 'price' => '53.61'],
        	['answer_id' => '13', 'price' => '753.12'],
        	['answer_id' => '14', 'price' => '159.43'],
        	['answer_id' => '15', 'price' => '156.22'],
        	['answer_id' => '16', 'price' => '416.11'],
        	['answer_id' => '17', 'price' => '48.43'],
        	['answer_id' => '18', 'price' => '43.15'],
        	['answer_id' => '19', 'price' => '89.73'],
        	['answer_id' => '20', 'price' => '789.15'],
        	['answer_id' => '21', 'price' => '43.31'],
        	['answer_id' => '22', 'price' => '1.01'],
        ]);
    }
}
