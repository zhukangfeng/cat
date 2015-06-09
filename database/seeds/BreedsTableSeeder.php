<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class BreedsTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        DB::table('breeds')->insert([
            ['id' => 1, 'name' => 'Domestic', 'created_user_id' => '1'],
            ['id' => 2, 'name' => 'Persian', 'created_user_id' => '2'],
            ['id' => 3, 'name' => 'Siamese', 'created_user_id' => '3'],
            ['id' => 4, 'name' => 'Abyssinian', 'created_user_id' => '4'],
            ['id' => 5, 'name' => 'Akida1', 'created_user_id' => '5'],
            ['id' => 6, 'name' => 'Akida2', 'created_user_id' => '6'],
            ['id' => 7, 'name' => 'Akida3', 'created_user_id' => '7'],
            ['id' => 8, 'name' => 'Akida4', 'created_user_id' => '8'],
            ['id' => 9, 'name' => 'Akida5', 'created_user_id' => '9'],
            ['id' => 10, 'name' => 'Akida6', 'created_user_id' => '10'],
        ]);
    }
}
