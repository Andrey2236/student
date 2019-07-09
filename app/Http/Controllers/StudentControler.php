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
        $students->discipline()->attach($request->discipline['id'], ['assessment' => $request->evaluation]);

        return redirect('student');
    }

    public function edit($id)
    {
        $students = Student::find($id);
        $groups = Group::all();
        $disciplines = Discipline::all();

        return view('students/update', compact('students', 'id', 'groups', 'disciplines'));
    }

    public function update(Request $request, $id)
    {
        $students = Student::findOrFail($request->id);

        $students->update($request->all());
//        $student->discipline()->attach($request->group['id'], ['assessment' => $request->evaluation]);

        return redirect('student');
    }

    public function destroy($id)
    {
        $students = Student::find($id);
        $students->discipline()->detach();
        $students->delete();

        return redirect('student');
    }
}
