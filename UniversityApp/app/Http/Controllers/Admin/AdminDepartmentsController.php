<?php

namespace App\Http\Controllers\Admin;

use App\College;
use App\Department;
use App\Http\Controllers\Controller;
//to use mysql query
use Illuminate\Http\Request;

class AdminDepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $colleges = College::all();
        $departments = Department::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.lang.en.departments.index', compact('colleges'))->with('departments', $departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colleges = College::all();
        $select = [];
        foreach ($colleges as $college) {
            $select[$college->id] = $college->college_name;
        }
        return view('admin.lang.en.departments.create', compact('select'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create validation in laravel project
        $this->validate($request, [
            'college_id' => 'required',
            'department_name' => 'required',
        ]);

        $department = new Department();
        $department->college_id = $request->input('college_id');
        $department->department_name = $request->input('department_name');
        $department->save();
        return redirect('/admin/departments')->with('success', 'Department Added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colleges = College::all();
        $department = Department::find($id);
        return view('admin.lang.en.departments.edit', compact('colleges'))->with('department', $department);
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
        //create validation in laravel project
        $this->validate($request, [
            'college_id' => 'required',
            'department_name' => 'required',
        ]);

        $department = Department::find($id);
        $department->college_id = $request->input('college_id');
        $department->department_name = $request->input('department_name');
        $department->save();
        return redirect('/admin/departments')->with('success', 'Department Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();
        return redirect('/admin/departments')->with('success', 'Department Removed');
    }

}
