<?php 

use Illuminate\Database\Seeder;

class ItemSaleDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_sale_document')->insert([
        		[
        			'sale_document_id' => '1',
        			'item_id' => '1'
        		],
        		[
        			'sale_document_id' => '1',
        			'item_id' => '2'
        		],
        		[
        			'sale_document_id' => '1',
        			'item_id' => '3'
        		],
        		[
        			'sale_document_id' => '1',
        			'item_id' => '4'
        		],
        		[
        			'sale_document_id' => '2',
        			'item_id' => '2'
        		],
        		[
        			'sale_document_id' => '2',
        			'item_id' => '3'
        		],
        		[
        			'sale_document_id' => '2',
        			'item_id' => '4'
        		],
        		[
        			'sale_document_id' => '2',
        			'item_id' => '5'
        		],
        	]);
    }
}
