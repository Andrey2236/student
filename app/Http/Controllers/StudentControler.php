<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreStudent;

use App\Discipline;
use App\Group;
use App\Student;


class StudentControler extends Controller
{
    public function index()
    {
        $students = Student::with('group', 'discipline')->get();
        return view('students/studentShow', compact('students'));
    }

    public function create()
    {
        $disciplines = Discipline::get();
        $groups = Group::all();

        return view(
            'students/create',
            compact(
                'groups',
                'disciplines'
            )
        );
    }

    public function store(StoreStudent $request)
    {

        $students = Student::create($request->all());
        foreach ($request->evaluation as $disciplineId => $assessment) {
            $students->discipline()->attach($disciplineId, ['assessment' => $assessment]);
        }
        return redirect('home');
    }

    public function edit(Student $student)
    {
        $disciplines = Discipline::all();
        $student->with('discipline')->get();
        return view('students.update', compact('student', 'disciplines'));
    }

    public function update(StoreStudent $request, Student $student)
    {
        $student->update($request->all());
        foreach ($request->evaluation as $disciplineId => $assessment) {
            $student->discipline()->attach($disciplineId, ['assessment' => $assessment]);
        }
        return redirect('home');
    }

    public function destroy(Student $student)
    {
        $student->discipline()->detach();
        $student->group();
        $student->delete();

        return redirect('home');
    }
}
