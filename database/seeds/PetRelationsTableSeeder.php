<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PetRelationsTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        DB::table('pet_relations')->insert([
            ['id' => 1, 'owner_id' => '1', 'pet_id' => '1', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-01 11:12:03'],
            ['id' => 2, 'owner_id' => '2', 'pet_id' => '2', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-02 11:12:03'],
            ['id' => 3, 'owner_id' => '3', 'pet_id' => '3', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-03 11:12:03'],
            ['id' => 4, 'owner_id' => '4', 'pet_id' => '4', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-04 11:12:03'],
            ['id' => 5, 'owner_id' => '5', 'pet_id' => '5', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-05 11:12:03'],
            ['id' => 6, 'owner_id' => '6', 'pet_id' => '6', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-06 11:12:03'],
            ['id' => 7, 'owner_id' => '7', 'pet_id' => '7', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-07 11:12:03'],
            ['id' => 8, 'owner_id' => '8', 'pet_id' => '8', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-08 11:12:03'],
            ['id' => 9, 'owner_id' => '9', 'pet_id' => '9', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-09 11:12:03'],
            ['id' => 10, 'owner_id' => '10', 'pet_id' => '10', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-10 11:12:03'],        
            ['id' => 11, 'owner_id' => '11', 'pet_id' => '11', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-10 11:12:03'],        
            ['id' => 12, 'owner_id' => '11', 'pet_id' => '12', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-10 11:12:03'],        
            ['id' => 13, 'owner_id' => '11', 'pet_id' => '13', 'pet_type' => '1', 'pet_type_name' => 'cat', 'begin_at' => '2015-01-27 18:31:13', 'end_at' => '2015-06-10 11:12:03'],        
        ]);
    }
}
