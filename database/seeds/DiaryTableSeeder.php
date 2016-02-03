<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class DiaryTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('pet_diary')->insert([
            ['id' => 1, 'pet_id' => '1', 'user_id' => '1', 'title' => 'title1', 'content' => 'content1', 'is_public' => true],
            ['id' => 2, 'pet_id' => '2', 'user_id' => '2', 'title' => 'title2', 'content' => 'content2', 'is_public' => true],
            ['id' => 3, 'pet_id' => '3', 'user_id' => '3', 'title' => 'title3', 'content' => 'content3', 'is_public' => true],
            ['id' => 4, 'pet_id' => '4', 'user_id' => '4', 'title' => 'title4', 'content' => 'content4', 'is_public' => true],
            ['id' => 5, 'pet_id' => '5', 'user_id' => '5', 'title' => 'title5', 'content' => 'content5', 'is_public' => true],
            ['id' => 6, 'pet_id' => '6', 'user_id' => '6', 'title' => 'title6', 'content' => 'content6', 'is_public' => true],
            ['id' => 7, 'pet_id' => '7', 'user_id' => '7', 'title' => 'title7', 'content' => 'content7', 'is_public' => true],
            ['id' => 8, 'pet_id' => '8', 'user_id' => '8', 'title' => 'title8', 'content' => 'content8', 'is_public' => true],
            ['id' => 9, 'pet_id' => '9', 'user_id' => '9', 'title' => 'title9', 'content' => 'content9', 'is_public' => false],
            ['id' => 10, 'pet_id' => '10', 'user_id' => '10', 'title' => 'title10', 'content' => 'content10', 'is_public' => true],
            ['id' => 11, 'pet_id' => '11', 'user_id' => '11', 'title' => 'title11', 'content' => 'content11', 'is_public' => true],
            ['id' => 12, 'pet_id' => '12', 'user_id' => '11', 'title' => 'title12', 'content' => 'content12', 'is_public' => false],
            ['id' => 13, 'pet_id' => '13', 'user_id' => '11', 'title' => 'title13', 'content' => 'content13', 'is_public' => true],
        ]);
    }
}
