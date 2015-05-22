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
            ['id' => 5, 'name' => 'Akida', 'created_user_id' => '5'],
        ]);
    }
}
