<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\ExamSchedule;
use App\ExamsSchedules;
use App\Http\Controllers\Controller;
use App\LecsSchedule;
use App\LecsSchedules;
use DB;
use Illuminate\Http\Request;

class AdminSchedulesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $lecSchedule = LecsSchedules::first();
        $examSchdule = ExamsSchedules::first();
        return view('admin.lang.en.schedules.index')
            ->with('lecSchedule', $lecSchedule)
            ->with('examSchdule', $examSchdule);
    }

    public function createExam()
    {
        $courses = Course::all();
        return view('admin.lang.en.schedules.create_exam_schedule')
            ->with('courses', $courses);
    }

    public function editExam($id)
    {
        $examsSchedules = ExamsSchedules::first();
        $examSchedule = ExamSchedule::all();
        $courses = Course::all();
        return view('admin.lang.en.schedules.edit_exam_schedule')
            ->with('examsSchedules', $examsSchedules)
            ->with('examSchedule', $examSchedule)
            ->with('courses', $courses);
    }

    public function storeExam(Request $request)
    {
        //create validation in laravel project
        $this->validate($request, [
            'semester' => 'required',
            'course.*' => 'required',
            'time_from.*' => 'required',
            'time_to.*' => 'required',
            'day.*' => 'required',
            'courses.*' => 'required',
            'time_froms.*' => 'required',
            'time_tos.*' => 'required',
            'days.*' => 'required',
        ]);

        $examsSchedules = new ExamsSchedules;
        $examsSchedules->semester_no = $request->input('semester');
        $examsSchedules->save();

        $course = $request->input('course');
        $time_from = $request->input('time_from');
        $time_to = $request->input('time_to');
        $day = $request->input('day');

        if (is_array($time_from) || is_object($time_from)) {
            for ($i = 0; $i < count($time_from); $i++) {
                $examSchedule = new ExamSchedule();
                $examSchedule->course_name = $course[$i];
                $examSchedule->exams_schedules_id = $examsSchedules->id;
                $examSchedule->time_from = $time_from[$i];
                $examSchedule->time_to = $time_to[$i];
                $examSchedule->day = $day[$i];
                $examSchedule->save();
            }
        }

        $courses = $request->input('courses');
        $time_froms = $request->input('time_froms');
        $time_tos = $request->input('time_tos');
        $days = $request->input('days');

        if (is_array($time_froms) || is_object($time_froms)) {
            for ($c = 0; $c < count($time_froms); $c++) {
                $examSchedules = new ExamSchedule();
                $examSchedules->course_name = $courses[$c];
                $examSchedules->exams_schedules_id = $examsSchedules->id;
                $examSchedules->time_from = $time_froms[$c];
                $examSchedules->time_to = $time_tos[$c];
                $examSchedules->day = $days[$c];
                $examSchedules->save();
            }

        }

        return redirect('/admin/schedules')->with('success', 'Schedule Created');

    }

    public function updateExam(Request $request, $id)
    {
        ExamSchedule::truncate();
        $exam = ExamsSchedules::first();
        $exam->delete();
        //create validation in laravel project
        $this->validate($request, [
            'semester' => 'required',
            'course.*' => 'required',
            'time_from.*' => 'required',
            'time_to.*' => 'required',
            'day.*' => 'required',
            'courses.*' => 'required',
            'time_froms.*' => 'required',
            'time_tos.*' => 'required',
            'days.*' => 'required',
        ]);

        $examsSchedules = new ExamsSchedules;
        $examsSchedules->semester_no = $request->input('semester');
        $examsSchedules->save();

        $course = $request->input('course');
        $time_from = $request->input('time_from');
        $time_to = $request->input('time_to');
        $day = $request->input('day');

        if (is_array($time_from) || is_object($time_from)) {
            for ($i = 0; $i < count($time_from); $i++) {
                $examSchedule = new ExamSchedule();
                $examSchedule->course_name = $course[$i];
                $examSchedule->exams_schedules_id = $examsSchedules->id;
                $examSchedule->time_from = $time_from[$i];
                $examSchedule->time_to = $time_to[$i];
                $examSchedule->day = $day[$i];
                $examSchedule->save();
            }
        }

        $courses = $request->input('courses');
        $time_froms = $request->input('time_froms');
        $time_tos = $request->input('time_tos');
        $days = $request->input('days');

        if (is_array($time_froms) || is_object($time_froms)) {
            for ($c = 0; $c < count($time_froms); $c++) {
                $examSchedules = new ExamSchedule();
                $examSchedules->course_name = $courses[$c];
                $examSchedules->exams_schedules_id = $examsSchedules->id;
                $examSchedules->time_from = $time_froms[$c];
                $examSchedules->time_to = $time_tos[$c];
                $examSchedules->day = $days[$c];
                $examSchedules->save();
            }

        }
        return redirect('/admin/schedules')->with('success', 'Schedule Updated');
    }

    public function createLec()
    {
        $lecs_schedules = DB::table('lecs_schedules')->first();
        if ($lecs_schedules != null) {
            return redirect('/admin/schedules')->with('error', 'This record already exists.');
        }
        return view('admin.lang.en.schedules.create_lecture_schedule');
    }

    public function editLec($id)
    {
        $lecsSchedules = LecsSchedules::first();
        $lecSchedule = LecsSchedule::all();
        $courses = Course::all();
        return view('admin.lang.en.schedules.edit_lecture_schedule')
            ->with('lecsSchedules', $lecsSchedules)
            ->with('lecSchedule', $lecSchedule)
            ->with('courses', $courses);
    }

    public function storeLec(Request $request)
    {
        //create validation in laravel project
        $this->validate($request, [
            'semester' => 'required',
            'course.*' => 'required',
            'seclec.*' => 'required',
            'proinc.*' => 'required',
            'time_from.*' => 'required',
            'time_to.*' => 'required',
            'day.*' => 'required',
            'courses.*' => 'required',
            'seclecs.*' => 'required',
            'proins.*' => 'required',
            'time_froms.*' => 'required',
            'time_tos.*' => 'required',
            'days.*' => 'required',
        ]);

        $lecuturesSchedules = new LecsSchedules;
        $lecuturesSchedules->semester_no = $request->input('semester');
        $lecuturesSchedules->save();

        $course = $request->input('course');
        $seclec = $request->input('seclec');
        $proinc = $request->input('proinc');
        $time_from = $request->input('time_from');
        $time_to = $request->input('time_to');
        $day = $request->input('day');

        if (is_array($seclec) || is_object($seclec)) {
            for ($i = 0; $i < count($seclec); $i++) {
                $lecsSchedule = new LecsSchedule();
                $lecsSchedule->course_name = $course[$i];
                $lecsSchedule->lecs_schedules_id = $lecuturesSchedules->id;

                if ($seclec[$i] == "Lecture") {
                    $lecsSchedule->professor_name = $proinc[$i];
                } else {
                    $lecsSchedule->instructor_name = $proinc[$i];
                }

                $lecsSchedule->time_from = $time_from[$i];
                $lecsSchedule->time_to = $time_to[$i];
                $lecsSchedule->day = $day[$i];
                $lecsSchedule->save();

            }
        }

        $courses = $request->input('courses');
        $seclecs = $request->input('seclecs');
        $proins = $request->input('proins');
        $time_froms = $request->input('time_froms');
        $time_tos = $request->input('time_tos');
        $days = $request->input('days');

        if (is_array($seclecs) || is_object($seclecs)) {
            for ($c = 0; $c < count($seclecs); $c++) {
                $lecsSchedules = new LecsSchedule();
                $lecsSchedules->course_name = $courses[$c];
                $lecsSchedules->lecs_schedules_id = $lecuturesSchedules->id;

                if ($seclecs[$c] == "Lecture") {
                    $lecsSchedules->professor_name = $proins[$c];
                } else {
                    $lecsSchedules->instructor_name = $proins[$c];
                }

                $lecsSchedules->time_from = $time_froms[$c];
                $lecsSchedules->time_to = $time_tos[$c];
                $lecsSchedules->day = $days[$c];
                $lecsSchedules->save();

            }

        }

        return redirect('/admin/schedules')->with('success', 'Schedule Created');

    }

    public function updateLec(Request $request, $id)
    {
        if (count(LecsSchedules::all()) != null) {
            LecsSchedule::truncate();
            $lec = LecsSchedules::first();
            $lec->delete();
        }

        //create validation in laravel project
        $this->validate($request, [
            'semester' => 'required',
            'course.*' => 'required',
            'seclec.*' => 'required',
            'proinc.*' => 'required',
            'time_from.*' => 'required',
            'time_to.*' => 'required',
            'day.*' => 'required',
            'courses.*' => 'required',
            'seclecs.*' => 'required',
            'proins.*' => 'required',
            'time_froms.*' => 'required',
            'time_tos.*' => 'required',
            'days.*' => 'required',
        ]);

        $lecuturesSchedules = new LecsSchedules;
        $lecuturesSchedules->semester_no = $request->input('semester');
        $lecuturesSchedules->save();

        $course = $request->input('course');
        $seclec = $request->input('seclec');
        $proinc = $request->input('proinc');
        $time_from = $request->input('time_from');
        $time_to = $request->input('time_to');
        $day = $request->input('day');

        if (is_array($seclec) || is_object($seclec)) {
            for ($i = 0; $i < count($seclec); $i++) {
                $lecsSchedule = new LecsSchedule();
                $lecsSchedule->course_name = $course[$i];
                $lecsSchedule->lecs_schedules_id = $lecuturesSchedules->id;

                if ($seclec[$i] == "Lecture") {
                    $lecsSchedule->professor_name = $proinc[$i];
                } else {
                    $lecsSchedule->instructor_name = $proinc[$i];
                }

                $lecsSchedule->time_from = $time_from[$i];
                $lecsSchedule->time_to = $time_to[$i];
                $lecsSchedule->day = $day[$i];
                $lecsSchedule->save();

            }
        }

        $courses = $request->input('courses');
        $seclecs = $request->input('seclecs');
        $proins = $request->input('proins');
        $time_froms = $request->input('time_froms');
        $time_tos = $request->input('time_tos');
        $days = $request->input('days');

        if (is_array($seclecs) || is_object($seclecs)) {
            for ($c = 0; $c < count($seclecs); $c++) {
                $lecsSchedules = new LecsSchedule();
                $lecsSchedules->course_name = $courses[$c];
                $lecsSchedules->lecs_schedules_id = $lecuturesSchedules->id;

                if ($seclecs[$c] == "Lecture") {
                    $lecsSchedules->professor_name = $proins[$c];
                } else {
                    $lecsSchedules->instructor_name = $proins[$c];
                }

                $lecsSchedules->time_from = $time_froms[$c];
                $lecsSchedules->time_to = $time_tos[$c];
                $lecsSchedules->day = $days[$c];
                $lecsSchedules->save();
            }

        }

        return redirect('/admin/schedules')->with('success', 'Schedule Updated');

    }

}
