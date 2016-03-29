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
                'category' => 'door',
                'name' => 'milgard' . str_random(8),
        		'number' => '1586-nui-456',
                'base_price' => '50.00',
                'image' => '',
        	],[
                'category' => 'door',
                'name' => 'milgard' . str_random(8),
        		'number' => '7894-ufwe-465',
                'base_price' => '50.00',
                'image' => '',
        	],[
                'category' => 'door',
                'name' => 'milgard' . str_random(8),
        		'number' => '78-hjfkds-46',
                'base_price' => '50.00',
                'image' => '',
        	],[
                'category' => 'door',
                'name' => 'milgard' . str_random(8),
        		'number' => '189561-iu-4',
                'base_price' => '50.00',
                'image' => '',
        	],[
                'category' => 'door',
                'name' => 'milgard' . str_random(8),
        		'number' => '461-vvhj-678',
                'base_price' => '50.00',
                'image' => '',
        	],[
                'category' => 'door',
                'name' => 'milgard' . str_random(8),
        		'number' => '456-nibi-678',
                'base_price' => '50.00',
                'image' => '',
        	],[
                'category' => 'door',
                'name' => 'milgard' . str_random(8),
        		'number' => '1564-hjk-fgh',
                'base_price' => '50.00',
                'image' => '',
        	],[
                'category' => 'door',
                'name' => 'milgard' . str_random(8),
        		'number' => '456-ghj-456',
                'base_price' => '50.00',
                'image' => '',
        	],[
                'category' => 'window',
                'name' => 'milgard' . str_random(8),
        		'number' => '8-fghj-8',
                'base_price' => '50.00',
                'image' => '',
        	],[
                'category' => 'window',
                'name' => 'milgard' . str_random(8),
        		'number' => '4569-bhj-567',
                'base_price' => '50.00',
                'image' => '',
        	],[
                'category' => 'window',
                'name' => 'milgard' . str_random(8),
                'number' => 'G2-1586-nui-456',
                'base_price' => '50.00',
                'image' => '',
            ],[
                'category' => 'window',
                'name' => 'milgard' . str_random(8),
                'number' => 'G2-7894-ufwe-465',
                'base_price' => '50.00',
                'image' => '',
            ],[
                'category' => 'window',
                'name' => 'milgard' . str_random(8),
                'number' => 'G2-78-hjfkds-46',
                'base_price' => '50.00',
                'image' => '',
            ],[
                'category' => 'window',
                'name' => 'milgard' . str_random(8),
                'number' => 'G2-189561-iu-4',
                'base_price' => '50.00',
                'image' => '',
            ],[
                'category' => 'window',
                'name' => 'milgard' . str_random(8),
                'number' => 'G2-461-vvhj-678',
                'base_price' => '50.00',
                'image' => '',
            ],[
                'category' => 'window',
                'name' => 'milgard' . str_random(8),
                'number' => 'G2-456-nibi-678',
                'base_price' => '50.00',
                'image' => '',
            ],[
                'category' => 'gutter',
                'name' => 'milgard' . str_random(8),
                'number' => 'G2-1564-hjk-fgh',
                'base_price' => '50.00',
                'image' => '',
            ],[
                'category' => 'gutter',
                'name' => 'milgard' . str_random(8),
                'number' => 'G2-456-ghj-456',
                'base_price' => '50.00',
                'image' => '',
            ],[
                'category' => 'gutter',
                'name' => 'milgard' . str_random(8),
                'number' => 'G2-8-fghj-8',
                'base_price' => '50.00',
                'image' => '',
            ],[
                'category' => 'gutter',
                'name' => 'milgard' . str_random(8),
                'number' => 'G2-4569-bhj-567',
                'base_price' => '50.00',
                'image' => '',
            ],
        ]);
    }
}
