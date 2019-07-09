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

    public function edit($id)
    {

        $disciplines = Discipline::find($id);

        return view('students/updateDiscipline', compact( 'disciplines'));
    }


    public function update(Request $request, $id)
    {
        $disciplines = Discipline::findOrFail($request->id);
        $disciplines->update($request->all());

        return redirect('discipline');
    }

    public function destroy($id)
    {
        $disciplines = Discipline::find($id);
        $disciplines->student()->detach();
        $disciplines->delete();

        return redirect('discipline');
    }

}
