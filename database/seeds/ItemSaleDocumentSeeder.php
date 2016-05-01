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
        			'item_id' => '1',
                    'quantity' => '2',
        		],
        		[
        			'sale_document_id' => '1',
        			'item_id' => '2',
                    'quantity' => '1',
        		],
        		[
        			'sale_document_id' => '1',
        			'item_id' => '3',
                    'quantity' => '1',
        		],
        		[
        			'sale_document_id' => '1',
        			'item_id' => '4',
                    'quantity' => '1',
        		],
        		[
        			'sale_document_id' => '2',
        			'item_id' => '2',
                    'quantity' => '1',
        		],
        		[
        			'sale_document_id' => '2',
        			'item_id' => '3',
                    'quantity' => '1',
        		],
        		[
        			'sale_document_id' => '2',
        			'item_id' => '4',
                    'quantity' => '1',
        		],
        		[
        			'sale_document_id' => '2',
        			'item_id' => '5',
                    'quantity' => '1',
        		],
                [
                    'sale_document_id' => '3',
                    'item_id' => '1',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '3',
                    'item_id' => '2',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '3',
                    'item_id' => '3',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '3',
                    'item_id' => '4',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '4',
                    'item_id' => '2',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '4',
                    'item_id' => '3',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '4',
                    'item_id' => '4',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '4',
                    'item_id' => '5',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '5',
                    'item_id' => '1',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '5',
                    'item_id' => '2',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '5',
                    'item_id' => '3',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '5',
                    'item_id' => '4',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '6',
                    'item_id' => '2',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '6',
                    'item_id' => '3',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '6',
                    'item_id' => '4',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '6',
                    'item_id' => '5',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '7',
                    'item_id' => '1',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '7',
                    'item_id' => '2',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '7',
                    'item_id' => '3',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '7',
                    'item_id' => '4',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '8',
                    'item_id' => '2',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '8',
                    'item_id' => '1',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '8',
                    'item_id' => '4',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '8',
                    'item_id' => '5',
                    'quantity' => '1',
                ],
        	]);
    }
}
