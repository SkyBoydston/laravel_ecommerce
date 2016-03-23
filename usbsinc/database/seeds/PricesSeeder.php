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
        	['answer_id' => '1',  'user_id' => null, 'company_id' => null, 'price' => '453.13' ],   // Admin's base prices
        	['answer_id' => '2',  'user_id' => null, 'company_id' => null, 'price' => '156.23' ],
        	['answer_id' => '3',  'user_id' => null, 'company_id' => null, 'price' => '456.89' ],
        	['answer_id' => '4',  'user_id' => null, 'company_id' => null, 'price' => '819.89' ],
        	['answer_id' => '5',  'user_id' => null, 'company_id' => null, 'price' => '7891.84'],
        	['answer_id' => '6',  'user_id' => null, 'company_id' => null, 'price' => '88.46'  ],
        	['answer_id' => '7',  'user_id' => null, 'company_id' => null, 'price' => '89.48'  ],
        	['answer_id' => '8',  'user_id' => null, 'company_id' => null, 'price' => '76.45'  ],
        	['answer_id' => '9',  'user_id' => null, 'company_id' => null, 'price' => '156.45' ],
        	['answer_id' => '10', 'user_id' => null, 'company_id' => null, 'price' => '891.53' ],
        	['answer_id' => '11', 'user_id' => null, 'company_id' => null, 'price' => '735.51' ],
        	['answer_id' => '12', 'user_id' => null, 'company_id' => null, 'price' => '53.61'  ],
        	['answer_id' => '13', 'user_id' => null, 'company_id' => null, 'price' => '753.12' ],
        	['answer_id' => '14', 'user_id' => null, 'company_id' => null, 'price' => '159.43' ],
        	['answer_id' => '15', 'user_id' => null, 'company_id' => null, 'price' => '156.22' ],
        	['answer_id' => '16', 'user_id' => null, 'company_id' => null, 'price' => '416.11' ],
        	['answer_id' => '17', 'user_id' => null, 'company_id' => null, 'price' => '48.43'  ],
        	['answer_id' => '18', 'user_id' => null, 'company_id' => null, 'price' => '43.15'  ],
        	['answer_id' => '19', 'user_id' => null, 'company_id' => null, 'price' => '89.73'  ],
        	['answer_id' => '20', 'user_id' => null, 'company_id' => null, 'price' => '789.15' ],
        	['answer_id' => '21', 'user_id' => null, 'company_id' => null, 'price' => '43.31'  ],
        	['answer_id' => '22', 'user_id' => null, 'company_id' => null, 'price' => '81.01'  ],
        ]);
    }
}
