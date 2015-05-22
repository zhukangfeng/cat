<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CatsTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        DB::table('cats')->insert([
            ['id' => 1, 'name' => 'Domestic1', 'date_of_birth' => '1991/03/22', 'sex' => 'male', 'price' => 20000, 'breed_id' => '1', 'created_user_id' => '1'],
            ['id' => 2, 'name' => 'Persian1', 'date_of_birth' => '1992/03/22', 'sex' => 'female', 'price' => 2000, 'breed_id' => '2', 'created_user_id' => '2'],
            ['id' => 3, 'name' => 'Siamese1', 'date_of_birth' => '1993/03/22', 'sex' => 'male', 'price' => 200, 'breed_id' => '3', 'created_user_id' => '3'],
            ['id' => 4, 'name' => 'Abyssinian1', 'date_of_birth' => '1994/03/22', 'sex' => 'female', 'price' => 20, 'breed_id' => '4', 'created_user_id' => '4'],
            ['id' => 5, 'name' => 'Akida1', 'date_of_birth' => '1994/03/22', 'sex' => 'male', 'price' => 2, 'breed_id' => '5', 'created_user_id' => '5'],
        ]);
    }
}
