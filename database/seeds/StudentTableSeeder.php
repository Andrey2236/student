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
        factory(App\Student::class, 1)->create()->each(function ($student){
            $group->group()->save(factory(App\Group::class)->make());
            $student->assessment()->save(factory(App\Assessment::class, 'student')->make());
        });
    }
}
