<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
        	['text' => 'Item type'],
        	['text' => 'Brand'],
        	['text' => 'Product line'],
        	['text' => 'Material'],
        	['text' => 'Color'],
        	['text' => 'Locks'],

        ]);
    }
}
