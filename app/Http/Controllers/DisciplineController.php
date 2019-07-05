<?php

namespace App\Http\Controllers;

use App\Discipline;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function create()
    {
        return view('students/disciplineCreate');
    }
    public function store(Request $request)
    {

        $disciplines = Discipline::create($request->Discipline);

        return redirect('student');
    }

}
