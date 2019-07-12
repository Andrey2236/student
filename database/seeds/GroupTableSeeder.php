<?php

use App\Discipline;
use App\Group;
use App\Student;
use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Group::class, 5)->create()->each(function ($group) {
            $group->student()->save(factory(Student::class)->make());
        });
    }
}
