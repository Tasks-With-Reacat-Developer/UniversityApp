<?php

namespace App\Http\Controllers\Admin;

use App\College;
use App\Course;
use App\CourseGroup;
use App\CourseOrder;
use App\Department;
use App\Http\Controllers\Controller;
use DB;
//to use mysql query
use Illuminate\Http\Request;

class AdminCoursesController extends Controller
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
        $courses = Course::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.lang.en.courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colleges = College::all();
        return view('admin.lang.en.courses.create', compact('colleges'));
    }

    public function create_course_group()
    {
        return view('admin.lang.en.courses.course_group.create');
    }

    public function edit_course_group($id)
    {
        $course = Course::find($id);
        return view('admin.lang.en.courses.course_group.edit')->with('course', $course);
    }

    public function store_course_group(Request $request)
    {
        //create validation in laravel project
        $this->validate($request, [
            'department_id' => 'required',
            'course_group_name' => 'required',
            'course_name' => 'required',
            'course_number' => 'required',
            'hours' => 'required',
            'order' => 'required',
        ]);

        $courseNames = $request->input('course_name');
        $courseNums = $request->input('course_number');
        $hours = $request->input('hours');
        $orders = $request->input('order');
        $courseGnum = $request->input('course_group_num');
        $courseGname = $request->input('course_group_names');
        $courseGhour = $request->input('hours_group');
        $courseGorder = $request->input('order_group');
        $courseGroup = new CourseGroup();
        $courseGroup->name = $request->input('course_group_name');
        if (is_array($courseGnum) || is_object($courseGnum)) {
            $counts = count($courseGnum);
        } else {
            $counts = 0;
        }
        $courseGroup->range = count($courseNames) + $counts;
        $courseGroup->save();

        if (is_array($courseNames) || is_object($courseNames)) {
            for ($i = 0; $i < count($courseNames); $i++) {
                $course = new Course();
                $courseOrder = new CourseOrder();
                $courseOrder->order = $orders[$i];
                $courseOrder->save();
                $course->department_id = $request->get('department_id');
                $course->course_group = $courseGroup->id;
                $course->course_order = $courseOrder->id;
                $course->course_name = $courseNames[$i];
                $course->course_number = $courseNums[$i];
                $course->hours = $hours[$i];
                $course->save();

            }
        }

        if (is_array($courseGnum) || is_object($courseGnum)) {
            $this->validate($request, [
                'course_group_num' => 'required',
                'course_group_name' => 'required',
                'hours_group' => 'required',
                'order_group' => 'required',
            ]);
            for ($i = 0; $i < count($courseGnum); $i++) {
                $course = new Course();
                $courseOrder = new CourseOrder();
                $courseOrder->order = $courseGorder[$i];
                $courseOrder->save();
                $course->department_id = $request->get('department_id');
                $course->course_group = $courseGroup->id;
                $course->course_order = $courseOrder->id;
                $course->course_name = $courseGname[$i];
                $course->course_number = $courseNums[$i];
                $course->hours = $courseGhour[$i];
                $course->save();
            }
        }

        return redirect('/admin/courses')->with('success', 'Course Group Added');
    }

    public function update_course_group(Request $request, $id)
    {
        //create validation in laravel project
        $this->validate($request, [
            'department_id' => 'required',
            'course_group_name' => 'required',
            'course_name' => 'required',
            'course_number' => 'required',
            'hours' => 'required',
            'order' => 'required',
        ]);
        $course = Course::find($id);
        $courseOrder = CourseOrder::all();
        foreach ($courseOrder as $cOrder) {
            if ($cOrder->id == $course->course_order) {
                DB::table('course_orders')
                    ->where('id', $cOrder->id)
                    ->update(['order' => $request->input('order')]);
            }
        }
        $course->course_group = $request->input('course_group_name');
        $course->department_id = $request->input('department_id');
        $course->course_name = $request->input('course_name');
        $course->course_number = $request->input('course_number');
        $course->hours = $request->input('hours');
        $course->save();
        return redirect('/admin/courses')->with('success', 'Course Updated');
    }

    public function fetch_department_data(Request $request)
    {
        //$departments = Department::all();
        $departments = Department::where('college_id', $request->get('id'))->get();
        $output = [];
        foreach ($departments as $department) {
            //if($department->college_id == $request->get('college'))
            $output[$department->id] = $department->department_name;
        }

        return $output;
        //echo json_encode(array('success'=>true));
    }

    public function fetch_college_level_data(Request $request)
    {
        $colleges = College::where('id', $request->get('id'))->get();
        $output = [];
        foreach ($colleges as $college) {
            for ($i = 1; $i <= $college->levels; $i++) {
                $output[$i] = $i;
            }

        }
        return $output;
    }

    public function fetch_course_data(Request $request)
    {
        $courses = Course::where('department_id', $request->get('id'))->get();
        $output = [];
        foreach ($courses as $course) {
            $output[$course->id] = $course->course_name;

        }
        return $output;
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
            'department_id' => 'required',
            'course_name' => 'required',
            'course_number' => 'required',
            'hours' => 'required',
        ]);

        $course = new Course();
        $course->department_id = $request->get('department_id');
        $course->course_name = $request->input('course_name');
        $course->course_number = $request->input('course_number');
        $course->hours = $request->input('hours');
        $course->save();

        $selectElements = $request->input('selectElements');
        if (is_array($selectElements) || is_object($selectElements)) {
            foreach ($selectElements as $selectElement) {
                $courses = new Course();
                $courses->department_id = $selectElement;
                $courses->course_name = $request->input('course_name');
                $courses->hours = $request->input('hours');
                $courses->save();
            }
        }

        return redirect('/admin/courses')->with('success', 'Course Added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('admin.lang.en.courses.edit')->with('course', $course);
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
            'department_id' => 'required',
            'course_name' => 'required',
            'course_number' => 'required',
            'hours' => 'required',
        ]);

        $course = Course::find($id);
        $course->department_id = $request->input('department_id');
        $course->course_name = $request->input('course_name');
        $course->course_number = $request->input('course_number');
        $course->hours = $request->input('hours');
        $course->save();
        return redirect('/admin/courses')->with('success', 'Course Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);

        if ($course->course_order != null) {
            $courseOrder = CourseOrder::all();
            foreach ($courseOrder as $cOrder) {
                if ($cOrder->id == $course->course_order) {
                    DB::table('course_orders')->where('id', $cOrder->id)->delete();
                }
            }

        }
        $course->delete();
        if ($course->course_group != null) {
            $courseGroup = CourseGroup::all();
            $coursesG = Course::where('course_group', $course->course_group)->count();
            foreach ($courseGroup as $cGroup) {
                if ($coursesG == 0) {
                    DB::table('course_groups')->where('id', $cGroup->id)->delete();
                }
            }
        }

        return redirect('/admin/courses')->with('success', 'Course Removed');
    }
}
