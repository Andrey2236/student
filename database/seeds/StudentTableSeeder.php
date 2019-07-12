<?php

use App\Assessment;
use App\Group;
use App\Student;
use App\Discipline;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        factory(Student::class, 10)->create()->each(function ($student) {
            $student->discipline()->save(factory(Student::class)->make());
        });
    }
}
