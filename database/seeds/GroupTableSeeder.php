<?php

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
        factory(App\Group::class, 1)->create()->each(function ($group) {
            $group->student()->save(factory(App\Student::class)->make());
        });
    }
}
