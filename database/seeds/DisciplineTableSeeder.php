<?php
use App\Discipline;
use App\Student;
use Illuminate\Database\Seeder;

class DisciplineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Discipline::class, 1)->create()->each(function ($disciplane) {
                $disciplane->assessment()->save(factory(App\Assessment::class, 'disciplane')->make());
        });
    }
}
