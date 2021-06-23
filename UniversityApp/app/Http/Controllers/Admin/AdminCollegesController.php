<?php

namespace App\Http\Controllers\Admin;

use App\College;
use App\Http\Controllers\Controller;
//to use mysql query
use Illuminate\Http\Request;

class AdminCollegesController extends Controller
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
        $colleges = College::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.lang.en.colleges.index')->with('colleges', $colleges);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lang.en.colleges.create');
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
            'college_name' => 'required',
            'levels' => 'required',
        ]);

        $college = new College();
        $college->college_name = $request->input('college_name');
        $college->levels = $request->input('levels');
        $college->save();
        return redirect('/admin/colleges')->with('success', 'College Added');
    }

    public function edit($id)
    {
        $college = College::find($id);
        return view('admin.lang.en.colleges.edit')->with('college', $college);
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
            'college_name' => 'required',
            'levels' => 'required',
        ]);

        //Update College
        $college = College::find($id);
        $college->college_name = $request->input('college_name');
        $college->levels = $request->input('levels');
        $college->save();
        return redirect('/admin/colleges')->with('success', 'College Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete College
        $college = College::find($id);
        $college->delete();
        return redirect('/admin/colleges')->with('success', 'College Removed');
    }
}
