<?php

namespace App\Http\Controllers;

use App\Discipline;
use App\Group;
use App\Student;
use Illuminate\Http\Request;
use Psy\Command\DumpCommand;

class ShowController extends Controller
{

    public function index()
    {
        $groups = Group::with('student.discipline')->get();
        $disciplines = Discipline::all();

        $assessmentTotal = [];
        $assessmentGroup = [];
        $assessmentStudent = [];

        foreach ($groups as $group) {
            $assessmentGroup[$group->id] = [];

            foreach ($group->student as $student) {
                $assessmentStudent[$student->id] = [];

                foreach ($student->discipline as $discipline) {
                    $assessmentStudent[$student->id][] = $discipline->pivot['assessment'];
                    $assessmentGroup[$group->id][] = $discipline->pivot['assessment'];
                    $assessmentTotal[] = $discipline->pivot['assessment'];
                }

                $assessmentStudent[$student->id] =
                    array_sum($assessmentStudent[$student->id]) /
                    count($assessmentStudent[$student->id]);
            }

            $assessmentGroup[$group->id] =
                array_sum($assessmentGroup[$group->id]) /
                count($assessmentGroup[$group->id]);

        }

        $assessmentTotal[] =
            array_sum($assessmentTotal) /
            count($assessmentTotal);
        $avgTotal = array_pop($assessmentTotal);

        //  dd($assessmentStudent, $assessmentGroup);
        //echo  array_pop($assessmentTotal);


        return view('students/home', compact(
                'groups',
                'assessmentStudent',
                'avgTotal',
                'assessmentGroup',
                'disciplines'
            )
        );
    }


}
