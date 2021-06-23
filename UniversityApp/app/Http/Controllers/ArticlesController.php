<?php

namespace App\Http\Controllers;

use App\Article;
use Auth;
use DB;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        if (Auth::check()) {
            $student_lang = DB::table('languages')->where('student_id', Auth::user()->id)->first();
            if ($student_lang && session('language') == null) {
                if ($student_lang->language == 'en') {
                    return view('lang.en.articles.index')->with('articles', $articles);
                } elseif ($student_lang->language == 'ar') {
                    return view('lang.ar.articles.index')->with('articles', $articles);
                }
            }
        }
        if (session('language') == 'en') {
            return view('lang.en.articles.index')->with('articles', $articles);
        } else {
            return view('lang.ar.articles.index')->with('articles', $articles);
        }
    }

    public function show($id)
    {
//show the article
        $article = Article::find($id);
        if (Auth::check()) {
            $student_lang = DB::table('languages')->where('student_id', Auth::user()->id)->first();
            if ($student_lang) {
                if ($student_lang->language == 'en') {
                    return view('lang.en.articles.show')->with('article', $article);
                } elseif ($student_lang->language == 'ar') {
                    return view('lang.ar.articles.show')->with('article', $article);
                }
            }
        }
        if (session('language') == 'en') {
            return view('lang.en.articles.show')->with('article', $article);
        } else {
            return view('lang.ar.articles.show')->with('article', $article);
        }
    }

}
