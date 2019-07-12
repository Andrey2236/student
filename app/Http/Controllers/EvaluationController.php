<?php

namespace App\Http\Controllers;

use App\Discipline;
use App\Student;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function create()
    {
        $students = Student::all();
        $assessments = Discipline::all();

        return view('students/create_Assessment', compact('assessments', 'students'));
    }

    public function store(Request $request)
    {
        dd($request->all());
        $assessments = Student::create($request->all());
        foreach ($request->evaluation as $disciplineId => $assessment) {
            $assessments->discipline()->attach($disciplineId, ['assessment' => $assessment]);
            dd($assessments);
        }

        return redirect('home');
    }
}
