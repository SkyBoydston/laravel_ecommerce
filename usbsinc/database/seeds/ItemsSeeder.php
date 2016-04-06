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
                'category' => 'Door',
                'brand' => 'Simpson',
                'name' => 'Double strap mahogany',
        		'number' => '1586-nui-456',
                'base_price' => 50.00,
                'image' => 'test_door.jpg',
        	],[
                'category' => 'Door',
                'brand' => 'Simpson',
                'name' => 'Single strap mahogany',
        		'number' => '7894-ufwe-465',
                'base_price' => 50.00,
                'image' => 'test_door.jpg',
        	],[
                'category' => 'Door',
                'brand' => 'Simpson',
                'name' => 'Triple ply',
        		'number' => '78-hjfkds-46',
                'base_price' => 50.00,
                'image' => 'test_door.jpg',
        	],[
                'category' => 'Door',
                'brand' => 'Acme Door and Gutter',
                'name' => 'Custom v.5',
        		'number' => '189561-iu-4',
                'base_price' => 50.00,
                'image' => 'test_door.jpg',
        	],[
                'category' => 'Door',
                'brand' => 'Acme Door and Gutter',
                'name' => 'Automatic open grey',
        		'number' => '461-vvhj-678',
                'base_price' => 50.00,
                'image' => 'test_door.jpg',
        	],[
                'category' => 'Door',
                'brand' => 'Acme Door and Gutter',
                'name' => 'Rigid mount poly ply',
        		'number' => '456-nibi-678',
                'base_price' => 50.00,
                'image' => 'test_door.jpg',
        	],[
                'category' => 'Door',
                'brand' => 'Potango Inc.',
                'name' => 'French double',
        		'number' => '1564-hjk-fgh',
                'base_price' => 50.00,
                'image' => 'test_door.jpg',
        	],[
                'category' => 'Door',
                'brand' => 'Potango Inc.',
                'name' => 'Swiss double',
        		'number' => '456-ghj-456',
                'base_price' => 50.00,
                'image' => 'test_door.jpg',
        	],[
                'category' => 'Window',
                'brand' => 'Milgard',
                'name' => 'Triple pane dual opening',
        		'number' => '8-fghj-8',
                'base_price' => 50.00,
                'image' => 'test_window.jpg',
        	],[
                'category' => 'Window',
                'brand' => 'Milgard',
                'name' => 'Multi pane single hung',
        		'number' => '4569-bhj-567',
                'base_price' => 50.00,
                'image' => 'test_window.jpg',
        	],[
                'category' => 'Window',
                'brand' => 'Milgard',
                'name' => 'Argon treated double hung',
                'number' => 'G2-1586-nui-456',
                'base_price' => 50.00,
                'image' => 'test_window.jpg',
            ],[
                'category' => 'Window',
                'brand' => 'Sunshine',
                'name' => 'Flush mount double pane',
                'number' => 'G2-7894-ufwe-465',
                'base_price' => 50.00,
                'image' => 'test_window.jpg',
            ],[
                'category' => 'Window',
                'brand' => 'Sunshine',
                'name' => 'Flush mount triple pane',
                'number' => 'G2-78-hjfkds-46',
                'base_price' => 50.00,
                'image' => 'test_window.jpg',
            ],[
                'category' => 'Window',
                'brand' => 'Pella',
                'name' => 'Argon treated double hung',
                'number' => 'G2-189561-iu-4',
                'base_price' => 50.00,
                'image' => 'test_window.jpg',
            ],[
                'category' => 'Window',
                'brand' => 'Pella',
                'name' => 'Stub mount - frosted',
                'number' => 'G2-461-vvhj-678',
                'base_price' => 50.00,
                'image' => 'test_window.jpg',
            ],[
                'category' => 'Window',
                'brand' => 'Pella',
                'name' => 'Stub mount - clear',
                'number' => 'G2-456-nibi-678',
                'base_price' => 50.00,
                'image' => 'test_window.jpg',
            ],[
                'category' => 'Gutter',
                'brand' => 'Omni Gutter',
                'name' => 'Hooded green',
                'number' => 'G2-1564-hjk-fgh',
                'base_price' => 50.00,
                'image' => 'test_gutter.jpg',
            ],[
                'category' => 'Gutter',
                'brand' => 'GutterCo.',
                'name' => 'Std. grey',
                'number' => 'G2-456-ghj-456',
                'base_price' => 50.00,
                'image' => 'test_gutter.jpg',
            ],[
                'category' => 'Gutter',
                'brand' => 'Acme Door and Gutter',
                'name' => 'Poly ply French mount',
                'number' => 'G2-8-fghj-8',
                'base_price' => 50.00,
                'image' => 'test_gutter.jpg',
            ],[
                'category' => 'Gutter',
                'brand' => 'Acme Door and Gutter',
                'name' => 'Clear self-cleaning',
                'number' => 'G2-4569-bhj-567',
                'base_price' => 50.00,
                'image' => 'test_gutter.jpg',
            ],
        ]);
    }
}
