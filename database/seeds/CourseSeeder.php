<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = config('course');

        foreach ($courses as $course) {
            $newCourse = new Course();
            $newCourse->name = $course['name'];
            $newCourse->description = $course['description'];
            $newCourse->hours = $course['hours'];
            $newCourse->save();
        }
    }
}
