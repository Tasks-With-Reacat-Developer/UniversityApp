<?php

namespace App\Providers;

use App\Brief;
use App\College;
use App\Course;
use App\CourseGroup;
use App\CourseOrder;
use App\Dean_Sh;
use App\Department;
use App\Future_Vision;
use App\Goal;
use App\Navbar;
use App\Nav_MultiLink;
use App\The_Message;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $colleges = College::all();
        View::share('colleges', $colleges);
        // $departments = Department::all();
        $departments = Department::with('college')->get();
        View::share('departments', $departments);

        $courses = Course::with('department')->get();
        View::share('courses', $courses);

        $courseGroup = CourseGroup::all();
        View::share('courseGroup', $courseGroup);
        $courseOrder = CourseOrder::all();
        View::share('courseOrder', $courseOrder);
        $filtered_courses = Course::distinct()->get(['course_name']);
        View::share('filtered_courses', $filtered_courses);
        $pages = Navbar::all();
        View::share('pages', $pages);
        $multilinks = Nav_MultiLink::all();
        View::share('multilinks', $multilinks);
        $brief_en = Brief::where('language', 'en')->first();
        View::share('brief_en', $brief_en);
        $brief_ar = Brief::where('language', 'ar')->first();
        View::share('brief_ar', $brief_ar);
        $dean_en = Dean_Sh::where('language', 'en')->first();
        View::share('dean_en', $dean_en);
        $dean_ar = Dean_Sh::where('language', 'ar')->first();
        View::share('dean_ar', $dean_ar);
        $goals_en = Goal::where('language', 'en')->first();
        View::share('goals_en', $goals_en);
        $goals_ar = Goal::where('language', 'ar')->first();
        View::share('goals_ar', $goals_ar);
        $message_en = The_Message::where('language', 'en')->first();
        View::share('message_en', $message_en);
        $message_ar = The_Message::where('language', 'ar')->first();
        View::share('message_ar', $message_ar);
        $future_vision_en = Future_Vision::where('language', 'en')->first();
        View::share('future_vision_en', $future_vision_en);
        $future_vision_ar = Future_Vision::where('language', 'ar')->first();
        View::share('future_vision_ar', $future_vision_ar);

    }

}
