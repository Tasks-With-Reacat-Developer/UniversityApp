<?php

namespace App\Http\Controllers;

use App\Page;
use Auth;
use DB;

class PagesController extends Controller
{
    public function show($id)
    {
//show the page
        $page = Page::find($id);
        if (Auth::check()) {
            $student_lang = DB::table('languages')->where('student_id', Auth::user()->id)->first();
            if ($student_lang && session('language') == null) {
                if ($student_lang->language == 'en') {
                    return view('lang.en.nav_pages.show')->with('page', $page);
                } elseif ($student_lang->language == 'ar') {
                    return view('lang.ar.nav_pages.show')->with('page', $page);
                }
            }
        }
        if (session('language') == 'en') {
            return view('lang.en.nav_pages.show')->with('page', $page);
        } else {
            return view('lang.ar.nav_pages.show')->with('page', $page);
        }
    }
}
