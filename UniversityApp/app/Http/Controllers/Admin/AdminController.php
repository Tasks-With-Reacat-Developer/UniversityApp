<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function dashboard()
    {
        $users = DB::table('admin_users')->count();
        $students = DB::table('users')->count();
        $vists = DB::table('page_views')->first();
        $unique_vistors = DB::table('unique_vistors')->first();
        return view('admin.lang.en.pages.dashboard')
            ->with('users', $users)
            ->with('students', $students)
            ->with('vists', $vists)
            ->with('unique_vistors', $unique_vistors);
        //return view('admin.pages.dashboard');
    }
}
