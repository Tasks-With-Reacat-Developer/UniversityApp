<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class SearchEngineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search()
    {
        $searchHome = $_GET['query'];
        $articles = Article::where('title', "LIKE", "%" . $searchHome . "%")->orderBy('created_at', 'desc')->get();
        if(session('language') == 'ar')
        return view('lang.ar.search.index', compact('articles'));
        else
        return view('lang.en.search.index', compact('articles'));
    }

}
