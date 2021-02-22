<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
                "name" => 'Dottie',
                "lastname" => 'Galloway',
                "nationality" => 'Irish',
                "dob" => '1981-06-04',
            ],
            [
                "name" => 'Aden',
                "lastname" => 'Whelan',
                "nationality" => 'English',
                "dob" => '1978-02-22',
            ],
            [
                "name" => 'Ellis',
                "lastname" => 'Reynolds',
                "nationality" => 'American',
                "dob" => '1992-08-23',
            ],
        ];

        foreach ($students as $student) {
            $newStudent = new Student();
            $newStudent->name = $student['name'];
            $newStudent->lastname = $student['lastname'];
            $newStudent->nationality = $student['nationality'];
            $newStudent->dob = $student['dob'];
            $newStudent->save();
        }
    }
}
