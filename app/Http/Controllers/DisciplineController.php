<?php

namespace App\Http\Controllers;

use App\Discipline;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDiscipline;

class DisciplineController extends Controller
{
    public function index()
    {
        $disciplines = Discipline::with('student')->get();
        return view('students/discipline', compact('disciplines'));
    }

    public function create()
    {

        return view('students/disciplineCreate');
    }

    public function store(StoreDiscipline $request)
    {
        $disciplines = Discipline::create($request->validated());

        return redirect('discipline');
    }

    public function edit(Discipline $disciplines)
    {

        return view('students/updateDiscipline', compact( 'disciplines'));
    }


    public function update(StoreDiscipline $request, Discipline $disciplines)
    {

        $disciplines->update($request->validated());

        return redirect('discipline');
    }

    public function destroy(Discipline $disciplines)
    {

        $disciplines->student()->detach();
        $disciplines->delete();

        return redirect('discipline');
    }

}
