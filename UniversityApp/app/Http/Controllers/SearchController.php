<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $articles = session('search');
        return view('lang.en.search.index')->with('articles', $articles);
    }

    public function search(Request $request)
    {

        $search = $request->input('search');
        session(['search' => $search]);
        if ($search == null) {
            $search = "";
        }
        $search = Article::where('title', "LIKE", "%" . $search . "%")->get();
        return redirect('/');
    }

}
