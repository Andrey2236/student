<?php

namespace App\Http\Controllers;

use App\Group;

use App\Http\Requests\StoreGroup;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::with('student')->get();
        return view('students/group', compact('groups'));
    }

    public function create()
    {

        return view('students/groupCreate');
    }

    public function store(StoreGroup $request)
    {
        $groups = Group::create($request->validated());

        return redirect('group');
    }

    public function edit(Group $group)
    {
        return view('students/updateGroup', compact('group'));
    }

    public function update(Request $request, Group $group)
    {
        $group->update($request->all());
        return redirect('group');
    }

    public function destroy(Group $group)
    {
        $group->delete();

        return redirect('group');
    }

}
