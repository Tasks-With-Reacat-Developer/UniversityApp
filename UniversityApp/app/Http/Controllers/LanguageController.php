<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        if ($request->get('arabic') != null) {
            $language = $request->get('arabic');
        } else {
            $language = $request->get('english');
        }
        session(['language' => $language]);
        if (Auth::check()) {
            $student_id = DB::table('languages')->where('student_id', Auth::user()->id)->first();
            if ($student_id) {
                DB::table('languages')->where('student_id', Auth::user()->id)->update(['language' => $language]);
            } else {
                DB::table('languages')->insert(
                    ['student_id' => Auth::user()->id, 'language' => $language]
                );
            }
        }

        return redirect(url()->previous());
    }
}
