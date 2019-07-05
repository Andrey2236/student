<?php

namespace App\Http\Controllers;

use App\Discipline;
use App\Group;
use App\Student;
use Illuminate\Http\Request;

class StudentControler extends Controller
{

    public function index()
    {
        $students = Student::all();

        return view('students/student', compact('students'));
    }


    public function create()
    {   $student = Student::all();


       // $student = Student::with('group')->get();

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


    public function store(Request $request)
    {   /*dd($request->all());*/
        $students = Student::create($request->all());
        $students->discipline()->attach($request->discipline['id'], ['assessment' => $request->evaluation]);



        return redirect('student');
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
