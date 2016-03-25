<?php

use Illuminate\Database\Seeder;

class MemberCoversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_covers')->insert([
        		'news' => 'news content',
        		'promotions' => 'promotions content',
        		'webinars' => 'webinars content',
        		'financial' => 'financial content',
        		'social_media_links' => 'social_media_links content',

        	]);
    }
}
