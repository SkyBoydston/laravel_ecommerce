<?php

use Illuminate\Database\Seeder;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
        	['question_id' => '1', 'text' => 'Door'],
        	['question_id' => '1', 'text' => 'Window'],
        	['question_id' => '2', 'text' => 'Milgard'],
        	['question_id' => '2', 'text' => 'Pella'],
        	['question_id' => '2', 'text' => 'Sunshine'],
        	['question_id' => '3', 'text' => 'Tuscany'],
        	['question_id' => '3', 'text' => 'WoodClad'],
        	['question_id' => '3', 'text' => 'Montecito'],
        	['question_id' => '3', 'text' => 'True Glass'],
        	['question_id' => '3', 'text' => 'Frosted Effects Line'],
        	['question_id' => '3', 'text' => 'Standard'],
        	['question_id' => '3', 'text' => 'Premium'],
        	['question_id' => '4', 'text' => 'Wood'],
        	['question_id' => '4', 'text' => 'Aluminum'],
        	['question_id' => '4', 'text' => 'Vinyl'],
        	['question_id' => '5', 'text' => 'White'],
        	['question_id' => '5', 'text' => 'Grey'],
        	['question_id' => '5', 'text' => 'Tan'],
        	['question_id' => '5', 'text' => 'Taupe'],
        	['question_id' => '6', 'text' => 'None'],
        	['question_id' => '6', 'text' => 'Single'],
        	['question_id' => '6', 'text' => 'Double'],


        ]);
    }
}
