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
            ['id' => '1', 'name' => 'user1', 'email' => '1@1.com', 'password' => '1'],
            ['id' => '2', 'name' => 'user2', 'email' => '2@2.com', 'password' => '2'],
            ['id' => '3', 'name' => 'user3', 'email' => '3@3.com', 'password' => '3'],
            ['id' => '4', 'name' => 'user4', 'email' => '4@4.com', 'password' => '4'],
            ['id' => '5', 'name' => 'user5', 'email' => '5@5.com', 'password' => '5'],
        ]);
    }
}
