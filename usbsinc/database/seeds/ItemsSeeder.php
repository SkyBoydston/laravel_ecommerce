<?php 

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('items')->insert([
        	[
        		'number' => '1586-nui-456',
        		'option_1' => '2',  // 1-2
        		'option_2' => '5',  // 3-5
        		'option_3' => '6',  // 6-12
        		'option_4' => '15',  // 13-15
        		'option_5' => '19',  // 16-19
        		'option_6' => '21',  // 20-22
        		'how_many_screws' => '50',
        		'shipping_weight' => '10.6',
                'base_price' => '50.00',
        	],[
        		'number' => '7894-ufwe-465',
        		'option_1' => '1',  // 1-2
        		'option_2' => '5',  // 3-5
        		'option_3' => '7',  // 6-12
        		'option_4' => '14',  // 13-15
        		'option_5' => '18',  // 16-19
        		'option_6' => '20',  // 20-22
        		'how_many_screws' => '10',
        		'shipping_weight' => '500.6',
                'base_price' => '50.00',
        	],[
        		'number' => '78-hjfkds-46',
        		'option_1' => '2',  // 1-2
        		'option_2' => '4',  // 3-5
        		'option_3' => '11',  // 6-12
        		'option_4' => '13',  // 13-15
        		'option_5' => '19',  // 16-19
        		'option_6' => '22',  // 20-22
        		'how_many_screws' => '11',
        		'shipping_weight' => '4.6',
                'base_price' => '50.00',
        	],[
        		'number' => '189561-iu-4',
        		'option_1' => '1',  // 1-2
        		'option_2' => '3',  // 3-5
        		'option_3' => '7',  // 6-12
        		'option_4' => '13',  // 13-15
        		'option_5' => '17',  // 16-19
        		'option_6' => '21',  // 20-22
        		'how_many_screws' => '44',
        		'shipping_weight' => '12.2',
                'base_price' => '50.00',
        	],[
        		'number' => '461-vvhj-678',
        		'option_1' => '1',  // 1-2
        		'option_2' => '5',  // 3-5
        		'option_3' => '9',  // 6-12
        		'option_4' => '15',  // 13-15
        		'option_5' => '18',  // 16-19
        		'option_6' => '21',  // 20-22
        		'how_many_screws' => '32',
        		'shipping_weight' => '16.0',
                'base_price' => '50.00',
        	],[
        		'number' => '456-nibi-678',
        		'option_1' => '1',  // 1-2
        		'option_2' => '5',  // 3-5
        		'option_3' => '10',  // 6-12
        		'option_4' => '15',  // 13-15
        		'option_5' => '17',  // 16-19
        		'option_6' => '22',  // 20-22
        		'how_many_screws' => '30',
        		'shipping_weight' => '15.5',
                'base_price' => '50.00',
        	],[
        		'number' => '1564-hjk-fgh',
        		'option_1' => '1',  // 1-2
        		'option_2' => '4',  // 3-5
        		'option_3' => '8',  // 6-12
        		'option_4' => '13',  // 13-15
        		'option_5' => '18',  // 16-19
        		'option_6' => '20',  // 20-22
        		'how_many_screws' => '200',
        		'shipping_weight' => '5555.5',
                'base_price' => '50.00',
        	],[
        		'number' => '456-ghj-456',
        		'option_1' => '2',  // 1-2
        		'option_2' => '3',  // 3-5
        		'option_3' => '7',  // 6-12
        		'option_4' => '13',  // 13-15
        		'option_5' => '16',  // 16-19
        		'option_6' => '22',  // 20-22
        		'how_many_screws' => '760',
        		'shipping_weight' => '100.15',
                'base_price' => '50.00',
        	],[
        		'number' => '8-fghj-8',
        		'option_1' => '2',  // 1-2
        		'option_2' => '4',  // 3-5
        		'option_3' => '12',  // 6-12
        		'option_4' => '15',  // 13-15
        		'option_5' => '19',  // 16-19
        		'option_6' => '21',  // 20-22
        		'how_many_screws' => '510',
        		'shipping_weight' => '122',
                'base_price' => '50.00',
        	],[
        		'number' => '4569-bhj-567',
        		'option_1' => '1',  // 1-2
        		'option_2' => '5',  // 3-5
        		'option_3' => '12',  // 6-12
        		'option_4' => '15',  // 13-15
        		'option_5' => '18',  // 16-19
        		'option_6' => '22',  // 20-22
        		'how_many_screws' => '501',
        		'shipping_weight' => '99.6',
                'base_price' => '50.00',
        	],

            // Added a bunch more

            [
                'number' => 'G2-1586-nui-456',
                'option_1' => '2',  // 1-2
                'option_2' => '5',  // 3-5
                'option_3' => '6',  // 6-12
                'option_4' => '15',  // 13-15
                'option_5' => '19',  // 16-19
                'option_6' => '21',  // 20-22
                'how_many_screws' => '50',
                'shipping_weight' => '10.6',
                'base_price' => '50.00',
            ],[
                'number' => 'G2-7894-ufwe-465',
                'option_1' => '1',  // 1-2
                'option_2' => '5',  // 3-5
                'option_3' => '7',  // 6-12
                'option_4' => '14',  // 13-15
                'option_5' => '18',  // 16-19
                'option_6' => '20',  // 20-22
                'how_many_screws' => '10',
                'shipping_weight' => '500.6',
                'base_price' => '50.00',
            ],[
                'number' => 'G2-78-hjfkds-46',
                'option_1' => '2',  // 1-2
                'option_2' => '4',  // 3-5
                'option_3' => '11',  // 6-12
                'option_4' => '13',  // 13-15
                'option_5' => '19',  // 16-19
                'option_6' => '22',  // 20-22
                'how_many_screws' => '11',
                'shipping_weight' => '4.6',
                'base_price' => '50.00',
            ],[
                'number' => 'G2-189561-iu-4',
                'option_1' => '1',  // 1-2
                'option_2' => '3',  // 3-5
                'option_3' => '7',  // 6-12
                'option_4' => '13',  // 13-15
                'option_5' => '17',  // 16-19
                'option_6' => '21',  // 20-22
                'how_many_screws' => '44',
                'shipping_weight' => '12.2',
                'base_price' => '50.00',
            ],[
                'number' => 'G2-461-vvhj-678',
                'option_1' => '1',  // 1-2
                'option_2' => '5',  // 3-5
                'option_3' => '9',  // 6-12
                'option_4' => '15',  // 13-15
                'option_5' => '18',  // 16-19
                'option_6' => '21',  // 20-22
                'how_many_screws' => '32',
                'shipping_weight' => '16.0',
                'base_price' => '50.00',
            ],[
                'number' => 'G2-456-nibi-678',
                'option_1' => '1',  // 1-2
                'option_2' => '5',  // 3-5
                'option_3' => '10',  // 6-12
                'option_4' => '15',  // 13-15
                'option_5' => '17',  // 16-19
                'option_6' => '22',  // 20-22
                'how_many_screws' => '30',
                'shipping_weight' => '15.5',
                'base_price' => '50.00',
            ],[
                'number' => 'G2-1564-hjk-fgh',
                'option_1' => '1',  // 1-2
                'option_2' => '4',  // 3-5
                'option_3' => '8',  // 6-12
                'option_4' => '13',  // 13-15
                'option_5' => '18',  // 16-19
                'option_6' => '20',  // 20-22
                'how_many_screws' => '200',
                'shipping_weight' => '5555.5',
                'base_price' => '50.00',
            ],[
                'number' => 'G2-456-ghj-456',
                'option_1' => '2',  // 1-2
                'option_2' => '3',  // 3-5
                'option_3' => '7',  // 6-12
                'option_4' => '13',  // 13-15
                'option_5' => '16',  // 16-19
                'option_6' => '22',  // 20-22
                'how_many_screws' => '760',
                'shipping_weight' => '100.15',
                'base_price' => '50.00',
            ],[
                'number' => 'G2-8-fghj-8',
                'option_1' => '2',  // 1-2
                'option_2' => '4',  // 3-5
                'option_3' => '12',  // 6-12
                'option_4' => '15',  // 13-15
                'option_5' => '19',  // 16-19
                'option_6' => '21',  // 20-22
                'how_many_screws' => '510',
                'shipping_weight' => '122',
                'base_price' => '50.00',
            ],[
                'number' => 'G2-4569-bhj-567',
                'option_1' => '1',  // 1-2
                'option_2' => '5',  // 3-5
                'option_3' => '12',  // 6-12
                'option_4' => '15',  // 13-15
                'option_5' => '18',  // 16-19
                'option_6' => '22',  // 20-22
                'how_many_screws' => '501',
                'shipping_weight' => '99.6',
                'base_price' => '50.00',
            ],
        ]);
    }
}
