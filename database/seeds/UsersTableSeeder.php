<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        DB::table('users')->insert([
            ['id' => '1', 'name' => 'user1', 'email' => '1@1.com', 'password' => '$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC'],
            ['id' => '2', 'name' => 'user2', 'email' => '2@2.com', 'password' => '$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC'],
            ['id' => '3', 'name' => 'user3', 'email' => '3@3.com', 'password' => '$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC'],
            ['id' => '4', 'name' => 'user4', 'email' => '4@4.com', 'password' => '$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC'],
            ['id' => '5', 'name' => 'user5', 'email' => '5@5.com', 'password' => '$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC'],
            ['id' => '6', 'name' => 'user6', 'email' => '6@6.com', 'password' => '$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC'],
            ['id' => '7', 'name' => 'user7', 'email' => '7@7.com', 'password' => '$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC'],
            ['id' => '8', 'name' => 'user8', 'email' => '8@8.com', 'password' => '$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC'],
            ['id' => '9', 'name' => 'user9', 'email' => '9@9.com', 'password' => '$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC'],
            ['id' => '10', 'name' => 'user10', 'email' => '10@10.com', 'password' => '$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC'],
            ['id' => '11', 'name' => 'shu', 'email' => 'shu@c-m.co.jp', 'password' => '$2y$10$voxt.lntgnf.QdYfIt0mvuTdAa7ves/TPf1IJgriJpjkzR5XvQrpO'],
        ]);
    }
}
