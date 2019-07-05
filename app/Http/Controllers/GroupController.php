<?php

namespace App\Http\Controllers;

use App\Group;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function create()
    {
        return view('students/groupCreate');
    }
    public function store(Request $request)
    {
        $groups = Group::create($request->get('Group'));
        dd($groups);
        return redirect('student');
    }

}
