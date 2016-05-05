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
                'category' => 'Case',
                'brand' => 'HP',
                'name' => 'Mega series 9',
        		'number' => '1586-4864',
                'base_price' => 99.99,
                'image' => 'case_1.jpg',
        	],[
                'category' => 'Case',
                'brand' => 'Dell',
                'name' => 'Scorpio series 7',
        		'number' => '7894-1563',
                'base_price' => 109.99,
                'image' => 'case_2.jpg',
        	],[
                'category' => 'Case',
                'brand' => 'Acer',
                'name' => 'X-cross Deluxe',
        		'number' => '7812-5745',
                'base_price' => 89.99,
                'image' => 'case_3.jpg',
        	],[
                'category' => 'Graphics Card',
                'brand' => 'ASUS',
                'name' => 'Custom V. 5',
        		'number' => '1895-4545',
                'base_price' => 289.99,
                'image' => 'graphics_card_1.jpg',
        	],[
                'category' => 'Graphics Card',
                'brand' => 'AMD',
                'name' => 'Red 1028',
        		'number' => '4611-8880',
                'base_price' => 189.99,
                'image' => 'graphics_card_2.jpg',
        	],[
                'category' => 'Graphics Card',
                'brand' => 'Athlon',
                'name' => 'ATI 7200',
        		'number' => '4561-1184',
                'base_price' => 429.79,
                'image' => 'graphics_card_3.jpg',
        	],[
                'category' => 'Hard Drive',
                'brand' => 'HP',
                'name' => '1TB Standard',
        		'number' => '1564-8496',
                'base_price' => 79.99,
                'image' => 'hard_drive_1.jpg',
        	],[
                'category' => 'Hard Drive',
                'brand' => 'Dell',
                'name' => '1.5TB 5600 Bus',
        		'number' => '4564-7863',
                'base_price' => 109.99,
                'image' => 'hard_drive_2.jpg',
        	],[
                'category' => 'Hard Drive',
                'brand' => 'Dell',
                'name' => '500MB Solid State Drive',
        		'number' => '4560-7489',
                'base_price' => 119.99,
                'image' => 'solid_state_drive_1.jpg',
        	],[
                'category' => 'Keyboard',
                'brand' => 'Logitech',
                'name' => 'Waveboard',
        		'number' => '4569-1563',
                'base_price' => 28.99,
                'image' => 'keyboard_1.jpg',
        	],[
                'category' => 'Keyboard',
                'brand' => 'Microsoft',
                'name' => 'MX520',
                'number' => '1245-1935',
                'base_price' => 19.99,
                'image' => 'keyboard_2.jpg',
            ],[
                'category' => 'Monitor',
                'brand' => 'HP',
                'name' => '19" Colorlux',
                'number' => '3547-4893',
                'base_price' => 129.99,
                'image' => 'monitor_1.jpg',
            ],[
                'category' => 'Monitor',
                'brand' => 'Dell',
                'name' => '21" swivel-base',
                'number' => '4635-5530',
                'base_price' => 189.99,
                'image' => 'monitor_2.jpg',
            ],[
                'category' => 'Motherboard',
                'brand' => 'MSI',
                'name' => 'Quad-port Xtreme',
                'number' => '6544-8850',
                'base_price' => 109.99,
                'image' => 'motherboard_1.jpg',
            ],[
                'category' => 'Motherboard',
                'brand' => 'Generic',
                'name' => 'Twin core Standard Series',
                'number' => '6489-9910',
                'base_price' => 49.99,
                'image' => 'motherboard_2.jpg',
            ],[
                'category' => 'Mouse',
                'brand' => 'Microsoft',
                'name' => 'MX220',
                'number' => '5819-1910',
                'base_price' => 10.99,
                'image' => 'mouse_1.jpg',
            ],[
                'category' => 'Mouse',
                'brand' => 'Logitech',
                'name' => 'Dual button wireless',
                'number' => '1564-6419',
                'base_price' => 18.99,
                'image' => 'mouse_2.jpg',
            ],[
                'category' => 'Optical Drive',
                'brand' => 'LG',
                'name' => 'Blu-ray high speed',
                'number' => '6715-4156',
                'base_price' => 69.99,
                'image' => 'optical_drive_1.jpg',
            ],
            [
                'category' => 'Optical Drive',
                'brand' => 'ASUS',
                'name' => '52X CD/DVD',
                'number' => '7896-4893',
                'base_price' => 59.99,
                'image' => 'optical_drive_2.jpg',
            ],
            [
                'category' => 'Optical Drive',
                'brand' => 'Generic',
                'name' => '48X CD/DVD',
                'number' => '1293-4861',
                'base_price' => 29.99,
                'image' => 'optical_drive_3.jpg',
            ],
            [
                'category' => 'Power Supply',
                'brand' => 'Generic',
                'name' => '120 Watt',
                'number' => '7615-4891',
                'base_price' => 28.99,
                'image' => 'power_supply_1.jpg',
            ],
            [
                'category' => 'Power Supply',
                'brand' => 'MSI',
                'name' => '140 Watt Energy Star Certified',
                'number' => '3423-1121',
                'base_price' => 79.99,
                'image' => 'power_supply_2.jpg',
            ],
            [
                'category' => 'CPU',
                'brand' => 'AMD',
                'name' => 'Quad core Version B',
                'number' => '4689-9815',
                'base_price' => 189.99,
                'image' => 'cpu_1.jpg',
            ],
            [
                'category' => 'CPU',
                'brand' => 'Intel',
                'name' => 'Core i7',
                'number' => '3481-9137',
                'base_price' => 289.99,
                'image' => 'cpu_2.jpg',
            ],
        ]);
    }
}
