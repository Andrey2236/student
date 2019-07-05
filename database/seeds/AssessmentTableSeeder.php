<?php

use App\Assessment;
use App\Discipline;
use App\Student;
use Illuminate\Database\Seeder;

class AssessmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Assessment::class, 1)->create()->each(function ($student) {
            $student->assessment()->save(factory(App\Student::class, 'assessment')->make());
        });
    }
}
