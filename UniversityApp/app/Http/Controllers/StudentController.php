<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\ExamSchedule;
use App\ExamsSchedules;
use App\LecsSchedule;
use App\LecsSchedules;
use App\StudentCourse;
use App\StudentData;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* if(Auth::guard('admin')->check())
        {
        $this->middleware('auth:admin');
        } else {*/
        $this->middleware('auth');
        // $this->middleware('auth:admin');
        //}
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $student_data_check = StudentData::where('student_id', Auth::user()->id)->first();
        if (!$student_data_check) {
            return view('home')->with('student_data_check', $student_data_check);
        }
        $student_cs_name = array();
        $student_cs_hours = array();
        $student_cs_number = array();
        $i = 0;
        $student_n_hours = 0;
        $student_data = StudentData::where('student_id', Auth::user()->id)->first();
        $student_courses = StudentCourse::where('student_data_id', $student_data->id)->get();
        foreach ($student_courses as $student_course) {
            $courses = Course::where('id', $student_course->course_id)->first();
            $student_cs_name[$i] = $courses->course_name;
            $student_cs_hours[$i] = $courses->hours;
            $student_cs_number[$i] = $courses->course_number;
            $i++;
            $student_n_hours += $courses->hours;
        }
        $department = Department::where('id', $student_data->department)->first();
        return view('home')
            ->with('student_cs_name', $student_cs_name)
            ->with('student_cs_hours', $student_cs_hours)
            ->with('student_cs_number', $student_cs_number)
            ->with('department', $department)
            ->with('student_n_hours', $student_n_hours)
            ->with('student_data', $student_data)
            ->with('student_data_check', $student_data_check);
    }

    public function gpa()
    {
        $student_data_check = StudentData::where('student_id', Auth::user()->id)->first();
        $student_data = StudentData::where('student_id', Auth::user()->id)->first();
        if (!$student_data_check) {
            return view('lang.en.student.gpa')->with('student_data_check', $student_data_check);
        }
        if (Auth::check()) {
            $student_lang = DB::table('languages')->where('student_id', Auth::user()->id)->first();
            if ($student_lang && session('language') == null) {
                if ($student_lang->language == 'en') {
                    return view('lang.en.student.gpa')
                        ->with('student_data', $student_data)
                        ->with('student_data_check', $student_data_check);
                } elseif ($student_lang->language == 'ar') {
                    return view('lang.ar.student.gpa')
                        ->with('student_data', $student_data)
                        ->with('student_data_check', $student_data_check);
                }
            }
        }
        if (session('language') == 'en') {
            return view('lang.en.student.gpa')
                ->with('student_data', $student_data)
                ->with('student_data_check', $student_data_check);
        } else {
            return view('lang.ar.student.gpa')
                ->with('student_data', $student_data)
                ->with('student_data_check', $student_data_check);
        }

    }

    public function grades()
    {
        $student_data_check = StudentData::where('student_id', Auth::user()->id)->first();
        if (!$student_data_check) {
            return view('lang.en.student.grades')->with('student_data_check', $student_data_check);
        }
        $student_cs_name = array();
        $student_gardes = array();
        $i = 0;
        $student_data = StudentData::where('student_id', Auth::user()->id)->first();
        $student_courses = StudentCourse::where('student_data_id', $student_data->id)->get();
        foreach ($student_courses as $student_course) {
            $courses = Course::where('id', $student_course->course_id)->first();
            $student_cs_name[$i] = $courses->course_name;
            switch ($student_course->grade) {
                case 4.0:$student_gardes[$i] = 'A';
                    break;
                case 3.7:$student_gardes[$i] = 'A-';
                    break;
                case 3.3:$student_gardes[$i] = 'B+';
                    break;
                case 3.0:$student_gardes[$i] = 'B';
                    break;
                case 2.7:$student_gardes[$i] = 'B-';
                    break;
                case 2.3:$student_gardes[$i] = 'C+';
                    break;
                case 2.0:$student_gardes[$i] = 'C';
                    break;
                case 1.7:$student_gardes[$i] = 'C-';
                    break;
                case 1.3:$student_gardes[$i] = 'D+';
                    break;
                case 1.0:$student_gardes[$i] = 'D';
                    break;
                case 0.7:$student_gardes[$i] = 'D-';
                    break;
                case 0.0:$student_gardes[$i] = 'F';
                    break;
            }
            $i++;
        }
        if (Auth::check()) {
            $student_lang = DB::table('languages')->where('student_id', Auth::user()->id)->first();
            if ($student_lang && session('language') == null) {
                if ($student_lang->language == 'en') {
                    return view('lang.en.student.grades')
                        ->with('student_cs_name', $student_cs_name)
                        ->with('student_courses', $student_courses)
                        ->with('student_gardes', $student_gardes)
                        ->with('student_data_check', $student_data_check);
                } elseif ($student_lang->language == 'ar') {
                    return view('lang.ar.student.grades')
                        ->with('student_cs_name', $student_cs_name)
                        ->with('student_courses', $student_courses)
                        ->with('student_gardes', $student_gardes)
                        ->with('student_data_check', $student_data_check);
                }
            }
        }
        if (session('language') == 'en') {
            return view('lang.en.student.grades')
                ->with('student_cs_name', $student_cs_name)
                ->with('student_courses', $student_courses)
                ->with('student_gardes', $student_gardes)
                ->with('student_data_check', $student_data_check);
        } else {
            return view('lang.ar.student.grades')
                ->with('student_cs_name', $student_cs_name)
                ->with('student_courses', $student_courses)
                ->with('student_gardes', $student_gardes)
                ->with('student_data_check', $student_data_check);
        }

    }

    public function lec_schedule()
    {
        $student_data_check = StudentData::where('student_id', Auth::user()->id)->first();
        if (!$student_data_check) {
            return view('lang.en.student.lec_schedule')->with('student_data_check', $student_data_check);
        }
        $student_data = StudentData::where('student_id', Auth::user()->id)->first();
        $lec_schedule = LecsSchedule::all();
        $lec_schedules = LecsSchedules::all();
        $student_course = StudentCourse::where('student_data_id', $student_data->id)->get();
        if (Auth::check()) {
            $student_lang = DB::table('languages')->where('student_id', Auth::user()->id)->first();
            if ($student_lang && session('language') == null) {
                if ($student_lang->language == 'en') {
                    return view('lang.en.student.lec_schedule')
                        ->with('student_data', $student_data)
                        ->with('student_data_check', $student_data_check)
                        ->with('lec_schedule', $lec_schedule)
                        ->with('lec_schedules', $lec_schedules)
                        ->with('student_course', $student_course);
                } elseif ($student_lang->language == 'ar') {
                    return view('lang.ar.student.lec_schedule')
                        ->with('student_data', $student_data)
                        ->with('student_data_check', $student_data_check)
                        ->with('lec_schedule', $lec_schedule)
                        ->with('lec_schedules', $lec_schedules)
                        ->with('student_course', $student_course);
                }
            }
        }

        if (session('language') == 'en') {
            return view('lang.en.student.lec_schedule')
                ->with('student_data', $student_data)
                ->with('student_data_check', $student_data_check)
                ->with('lec_schedule', $lec_schedule)
                ->with('lec_schedules', $lec_schedules)
                ->with('student_course', $student_course);
        } else {
            return view('lang.ar.student.lec_schedule')
                ->with('student_data', $student_data)
                ->with('student_data_check', $student_data_check)
                ->with('lec_schedule', $lec_schedule)
                ->with('lec_schedules', $lec_schedules)
                ->with('student_course', $student_course);
        }

    }

    public function exam_schedule()
    {
        $student_data_check = StudentData::where('student_id', Auth::user()->id)->first();
        if (!$student_data_check) {
            return view('lang.en.student.lec_schedule')->with('student_data_check', $student_data_check);
        }
        $student_data = StudentData::where('student_id', Auth::user()->id)->first();
        $exam_schedule = ExamSchedule::all();
        $exam_schedules = ExamsSchedules::all();
        $student_course = StudentCourse::where('student_data_id', $student_data->id)->get();
        if (Auth::check()) {
            $student_lang = DB::table('languages')->where('student_id', Auth::user()->id)->first();
            if ($student_lang && session('language') == null) {
                if ($student_lang->language == 'en') {
                    return view('lang.en.student.exam_schedule')
                        ->with('student_data', $student_data)
                        ->with('student_data_check', $student_data_check)
                        ->with('exam_schedule', $exam_schedule)
                        ->with('exam_schedules', $exam_schedules)
                        ->with('student_course', $student_course);
                } elseif ($student_lang->language == 'ar') {
                    return view('lang.ar.student.exam_schedule')
                        ->with('student_data', $student_data)
                        ->with('student_data_check', $student_data_check)
                        ->with('exam_schedule', $exam_schedule)
                        ->with('exam_schedules', $exam_schedules)
                        ->with('student_course', $student_course);
                }
            }
        }
        if (session('language') == 'en') {
            return view('lang.en.student.exam_schedule')
                ->with('student_data', $student_data)
                ->with('student_data_check', $student_data_check)
                ->with('exam_schedule', $exam_schedule)
                ->with('exam_schedules', $exam_schedules)
                ->with('student_course', $student_course);
        } else {
            return view('lang.ar.student.exam_schedule')
                ->with('student_data', $student_data)
                ->with('student_data_check', $student_data_check)
                ->with('exam_schedule', $exam_schedule)
                ->with('exam_schedules', $exam_schedules)
                ->with('student_course', $student_course);
        }

    }

    public function change_password()
    {
        $student_id = Auth::User()->id;
        $student = User::find($student_id);

        if (Auth::check()) {
            $student_lang = DB::table('languages')->where('student_id', Auth::user()->id)->first();
            if ($student_lang && session('language') == null) {
                if ($student_lang->language == 'en') {
                    return view('lang.en.student.change_password')
                        ->with('student', $student);
                } elseif ($student_lang->language == 'ar') {
                    return view('lang.ar.student.change_password')
                        ->with('student', $student);
                }
            }
        }
        if (session('language') == 'en') {
            return view('lang.en.student.change_password')
                ->with('student', $student);
        } else {
            return view('lang.ar.student.change_password')
                ->with('student', $student);
        }

    }

    public function update_password(Request $request)
    {
        //create validation in laravel project
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);
        $student_id = Auth::User()->id;
        $student = User::find($student_id);
        $oldPassword = $request->get('old_password');
        $newPassword = $request->get('new_password');
        $confirmPassword = $request->get('confirm_password');
        $passwordHashCheck = Hash::check($oldPassword, $student->password);
        if ($passwordHashCheck) {
            if ($newPassword == $confirmPassword) {
                $student->password = Hash::make($confirmPassword);
                $student->save();
            } else {
                return redirect('/student/change-password')->with("error", "Password doesn't match!");
            }
        } else {
            return redirect('/student/change-password')->with('error', 'Old Password Wrong!');
        }

        return redirect('/student/change-password')->with('success', 'Password Updated!');
    }

}
