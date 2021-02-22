<?php

use App\Group;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newClassroom = new ClassRooms();
            $newClassroom->name = $faker->name;
            $newClassroom->capacity = $faker->numberBetween(20, 50);
            $newClassroom->save();
        }
    }
}
