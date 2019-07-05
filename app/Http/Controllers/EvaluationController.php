<?php

namespace App\Http\Controllers;


use App\Discipline;
use App\Evaluation;
use App\Student;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function create()
    {
        $evaluation = Evaluation::with('student')->get();
        dd($evaluation);
        $students = Student::get();
        $disciplines = Discipline::get();

        return view('students/evaluationCreate', compact( 'students','disciplines'));
    }
    public function store(Request $request)
    {

          $evaluation = Evaluation::create($request->all());
          $evaluation->discipline()->attach($request->student['id']);
          dd($evaluation);

          dd($evaluation);
//        $evaluation->discipline()->attach($request->discipline['id']);



        return redirect('student');
    }
}
