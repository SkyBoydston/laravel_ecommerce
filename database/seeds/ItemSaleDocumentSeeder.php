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
        			'item_id' => '4',
                    'quantity' => '2',
        		],
        		[
        			'sale_document_id' => '1',
        			'item_id' => '9',
                    'quantity' => '1',
        		],
        		[
        			'sale_document_id' => '1',
        			'item_id' => '15',
                    'quantity' => '1',
        		],
        		[
        			'sale_document_id' => '1',
        			'item_id' => '24',
                    'quantity' => '3',
        		],
        		[
        			'sale_document_id' => '2',
        			'item_id' => '2',
                    'quantity' => '1',
        		],
        		[
        			'sale_document_id' => '2',
        			'item_id' => '5',
                    'quantity' => '1',
        		],
        		[
        			'sale_document_id' => '2',
        			'item_id' => '7',
                    'quantity' => '1',
        		],
        		[
        			'sale_document_id' => '2',
        			'item_id' => '10',
                    'quantity' => '1',
        		],
                [
                    'sale_document_id' => '3',
                    'item_id' => '3',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '3',
                    'item_id' => '7',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '3',
                    'item_id' => '16',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '3',
                    'item_id' => '19',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '4',
                    'item_id' => '18',
                    'quantity' => '10',
                ],
                [
                    'sale_document_id' => '4',
                    'item_id' => '6',
                    'quantity' => '5',
                ],
                [
                    'sale_document_id' => '4',
                    'item_id' => '22',
                    'quantity' => '3',
                ],
                [
                    'sale_document_id' => '4',
                    'item_id' => '1',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '5',
                    'item_id' => '24',
                    'quantity' => '6',
                ],
                [
                    'sale_document_id' => '5',
                    'item_id' => '14',
                    'quantity' => '12',
                ],
                [
                    'sale_document_id' => '5',
                    'item_id' => '11',
                    'quantity' => '2',
                ],
                [
                    'sale_document_id' => '5',
                    'item_id' => '8',
                    'quantity' => '6',
                ],
                [
                    'sale_document_id' => '6',
                    'item_id' => '2',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '6',
                    'item_id' => '5',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '6',
                    'item_id' => '9',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '6',
                    'item_id' => '12',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '6',
                    'item_id' => '16',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '6',
                    'item_id' => '21',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '8',
                    'item_id' => '4',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '8',
                    'item_id' => '9',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '8',
                    'item_id' => '17',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '8',
                    'item_id' => '23',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '8',
                    'item_id' => '21',
                    'quantity' => '1',
                ],
                [
                    'sale_document_id' => '8',
                    'item_id' => '7',
                    'quantity' => '1',
                ],
        	]);
    }
}
