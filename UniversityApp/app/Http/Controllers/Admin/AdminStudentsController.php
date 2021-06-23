<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\StudentData;
use App\StudentCourse;
use App\User;
use App\College;
use App\Course;
use App\CourseOrder;
use DB;

class AdminStudentsController extends Controller
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
        $students = User::orderBy('created_at','desc')->paginate(5);
        return view('admin.lang.en.students.index')->with('students',$students);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create_student_data($id){
      $student = User::find($id);
      $student_data_id = DB::table('student_data')->where('student_id',$id)->first();
      if($student_data_id != NULL){
      return redirect('/admin/students/'. $id .'/edit-student-data')->with('error','This record already exists.');
      }
      return view('admin.lang.en.students.students_data.create')->with('student',$student);
    }

    public function edit_student_data($id){
      $student = User::find($id);
      $student_data = StudentData::where('student_id',$id)->first();
      //dd($student_data->id);
      $students_data =  StudentData::where('student_id',$id)->get();
      $student_course = StudentCourse::where('student_data_id',$student_data->id)->get();
      return view('admin.lang.en.students.students_data.edit')
      ->with('student',$student)
      ->with('student_data',$student_data)
      ->with('student_course',$student_course)
      ->with('students_data',$students_data);
    }

    public function store_student_data(Request $request, $id){
       //create validation in laravel project
       $this->validate($request, [
       'level' => 'required',
       'college' => 'required',
       'department_id' => 'required',
       'course.*' => 'required',
       'courses.*' => 'required',
       ]);

       $cs = $request->get('course');
       $cs2 = $request->get('courses');
       if($request->get('courses') == NULL){
        $cs3 = $request->get('course');
       }else{
        $cs3 = array_merge($cs,$cs2);
       }
      
       $index = 0;

       for($x=0; $x<count($cs3); $x++){
         for($y=0; $y<count($cs3); $y++){
           if($cs3[$x] == $cs3[$y]){
             $index++;
           if($index > count($cs3)){
          return redirect('/admin/students/'.$id.'/create-student-data')->with('error', "You can't select course multiple times.");   
           }
         }
         }
       }

       $order_s = 1;
       for($i=0; $i<count($cs3); $i++){
        $course_i = Course::where('id',$cs3[$i])->first();
        if($course_i->course_group != NULL){
        for($x=0; $x<count($cs3); $x++){
        $course_x = Course::where('id',$cs3[$x])->first();
        if($course_x->course_group == $course_i->course_group){
          $course_order = CourseOrder::where('id',$course_x->course_order)->first();
          if(($order_s - $course_order->order) != 0){
          return redirect('/admin/students/'.$id.'/create-student-data')->with('error', substr($course_x->course_name, 0,-1).($course_order->order-1)." MUST be taken first!"); 
         }
        
          
         $order_s++;
         
        }
        
       }
       $order_s = 1;
     }
        
       }

        $hours = array();
        $points = array();

        $course = $request->get('course');
        $mid_term_grade = $request->input('mid_term_grade');
        $grade = $request->input('grade');

        $student_data = new StudentData;
        $student_data->student_id = $id;
        $student_data->college = $request->input('college');
        $student_data->department = $request->input('department_id');
        $student_data->level = $request->input('level');
        foreach($grade as $gd){
          foreach($mid_term_grade as $mid_gd){
          if($gd == NULL && $mid_gd == NULL){
            $student_data->student_status = "New";
          } else if($gd == NULL){
            $student_data->student_status = "Enrol";
          } else {
            $student_data->student_status = NULL;
          }
        }
      }
        $student_data->save();

        

        $c = 0;
        $x = 0;
        
        if (is_array($course) || is_object($course)){
          for($i=0; $i<count($course); $i++){
            $student_courses = new StudentCourse();
            $student_courses->student_data_id = $student_data->id;
            $student_courses->course_id = $course[$i];
            $student_course = Course::where('id',$course[$i])->first();
            $hours[$c++] = $student_course->hours;
            $student_courses->mid_term_grade = $mid_term_grade[$i];
            $student_courses->grade = $grade[$i];
            $points[$x++] = $grade[$i];
            $student_courses->course_name = $student_course->course_name;
            $student_courses->save();
          }
        }


        $courses = $request->get('courses');
        $mid_term_grades = $request->input('mid_term_grades');
        $grades = $request->input('grades');

        if (is_array($courses) || is_object($courses)){
          for($i=0; $i<count($courses); $i++){
            $cs = Course::where('id',$courses[$i])->first();
            $hours[$c++] = $cs->hours;
            $studnt_courses = new StudentCourse();
            $studnt_courses->student_data_id = $student_data->id;
            $studnt_courses->course_id = $courses[$i];
            $studnt_courses->mid_term_grade = $mid_term_grades[$i];
            $studnt_courses->grade = $grades[$i];
            $points[$x++] = $grades[$i];
            $studnt_courses->course_name = $cs->course_name;
            $studnt_courses->save();
          }
        }

      $qp = array();
      $hours_sum = 0;
      $qp_sum = 0;
     for($s=0; $s<count($hours); $s++){
      $qp[$s] = $hours[$s] * $points[$s];
      $hours_sum += $hours[$s];
     }

     for($y=0; $y<count($qp); $y++){
      $qp_sum += $qp[$y];
     }

      $student_dt = StudentData::find($student_data->id);
      $gpa = $qp_sum / $hours_sum;
      $student_dt->gpa = $gpa;
      $student_dt->save();

        return redirect('/admin/students')->with('success', 'Student Data Saved');
    }

    public function update_student_data(Request $request, $id, $student_id){
       //create validation in laravel project
       $this->validate($request, [
        'level' => 'required',
        'college' => 'required',
        'department_id' => 'required',
        'course.*' => 'required',
        'courses.*' => 'required',
        ]);
 
        $cs = $request->get('course');
        $cs2 = $request->get('courses');
        if($request->get('courses') == NULL){
         $cs3 = $request->get('course');
        }else{
          $cs3 = array_merge($cs,$cs2);
        }
       
        $index = 0;

        for($x=0; $x<count($cs3); $x++){
          for($y=0; $y<count($cs3); $y++){
            if($cs3[$x] == $cs3[$y]){
              $index++;
            if($index > count($cs3)){
           return redirect('/admin/students/'.$student_id.'/edit-student-data')->with('error', "You can't select course multiple times.");   
            }
          }
          }
        }
        
        $order_s = 1;
        for($i=0; $i<count($cs3); $i++){
         $course_i = Course::where('id',$cs3[$i])->first();
         if($course_i->course_group != NULL){
         for($x=0; $x<count($cs3); $x++){
         $course_x = Course::where('id',$cs3[$x])->first();
         if($course_x->course_group == $course_i->course_group){
           $course_order = CourseOrder::where('id',$course_x->course_order)->first();
           if(($order_s - $course_order->order) != 0){
           return redirect('/admin/students/'.$student_id.'/edit-student-data')->with('error', substr($course_x->course_name, 0,-1).($course_order->order-1)." MUST be taken first!"); 
          }
         
           
          $order_s++;
          
         }
         
        }
        $order_s = 1;
      }
         
        }

        
        $hours = array();
        $points = array();

        $course = $request->get('course');
        $mid_term_grade = $request->input('mid_term_grade');
        $grade = $request->input('grade');
        $course_status = $request->input('course_status');

         $student_data = StudentData::find($id);
         $student_data->student_id = $student_id;
         $student_data->college = $request->input('college');
         $student_data->department = $request->input('department_id');
         $student_data->level = $request->input('level');
         foreach($grade as $gd){
          foreach($mid_term_grade as $mid_gd){
          if($gd == NULL && $mid_gd == NULL){
            $student_data->student_status = "New";
          } else if($gd == NULL){
            $student_data->student_status = "Enrol";
          } else {
            $student_data->student_status = NULL;
          }
        }
      }
         
         $course_status_pos = $request->get('course_status_pos');
         $i = 0;
         $c = 0;
         $x = 0;


         if (is_array($course) || is_object($course)){
             $student_courses = StudentCourse::where('student_data_id',$id)->get();
            foreach($student_courses as $student_course){
             if($student_course->course_id != $course[$i]){
             $student_course->course_id = $course[$i];
             }
             $hours[$c++] = $student_course->course->hours;
             $student_course->mid_term_grade = $mid_term_grade[$i];
             $student_course->grade = $grade[$i];
             $points[$x++] = $grade[$i];
             $st_course = Course::where('id',$course[$i])->first();
             $student_course->course_name = $st_course->course_name;
              
          for($y=0; $y<=$i; $y++){
          if(is_array($course_status_pos) || is_object($course_status_pos)){
            if($y < sizeof($course_status_pos)){
            if($course_status_pos[$y] == $i){
             $student_course->course_status = $course_status[$y];
            }
          }

           if($grade[$i] != "0.0"){
            if($y < sizeof($course_status)){
            if($course_status[$y] == 'Active' || $course_status[$y] == 'Deactived'){
                $student_course->course_status = NULL;
              }
            }
        }
          
        }
      }
             $student_course->save();
             if($i < count($course)-1){
             $i++;
             }
             
             
            }
         }
 
        
         $courses = $request->get('courses');
         $mid_term_grades = $request->input('mid_term_grades');
         $grades = $request->input('grades');
 
         if (is_array($courses) || is_object($courses)){
           for($i=0; $i<count($courses); $i++){
             $cs = Course::where('id',$courses[$i])->first();
             $hours[$c++] = $cs->hours;
             $studnt_courses = new StudentCourse();
             $studnt_courses->student_data_id = $student_data->id;
             $studnt_courses->course_id = $courses[$i];
             $studnt_courses->mid_term_grade = $mid_term_grades[$i];
             $studnt_courses->grade = $grades[$i];
             $points[$x++] = $grades[$i];
             $studnt_courses->course_name = $cs->course_name;
             $studnt_courses->save();
           }
         }
         

         $student_courses_rm = StudentCourse::where('student_data_id',$id)->orderBy('id', 'DESC')->get();
         define('COURSE_COUNT',count($course));
         $std_course_count = count($student_courses_rm);
       if (is_array($student_courses_rm) || is_object($student_courses_rm)){
          foreach($student_courses_rm as $std_courses_rm){
          $std_rm = StudentCourse::find($std_courses_rm->id);
         if($std_course_count > COURSE_COUNT && empty($courses)){
          $std_rm->delete();
          $std_course_count--;
         }
        }
      }

      $qp = array();
      $hours_sum = 0;
      $qp_sum = 0;
     for($s=0; $s<count($hours); $s++){
      $qp[$s] = $hours[$s] * $points[$s];
      $hours_sum += $hours[$s];
     }

     for($y=0; $y<count($qp); $y++){
      $qp_sum += $qp[$y];
     }

      $gpa = $qp_sum / $hours_sum;
      //dd($gpa);
      $student_data->gpa = $gpa;
      $student_data->save();
 
         return redirect('/admin/students')->with('success', 'Student Data Updated');
    }


    public function create()
    {
    return view('admin.lang.en.students.create');
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
       'student_id' => 'required',
       'name' => 'required',
       'email' => 'required',
       'password' => 'required',
       ]);
        $student = new User();
        $student->student_id = $request->input('student_id');
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->password = Hash::make($request->input('password'));
        $student->save();
        return redirect('/admin/students')->with('success', 'Student Added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = User::find($id);
        return view('admin.lang.en.students.edit')->with('student',$student);
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
        'student_id' => 'required',
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        ]);
        $student = User::find($id);
        $student->student_id = $request->input('student_id');
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->password = Hash::make($request->input('password'));
        $student->save();
        return redirect('/admin/students')->with('success', 'Student Info Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = User::find($id);
        //$student_data = StudentData::find($id);
        $student->delete();
        //$student_data->delete();
        return redirect('/admin/students')->with('success', 'Student Removed');
    }

}
