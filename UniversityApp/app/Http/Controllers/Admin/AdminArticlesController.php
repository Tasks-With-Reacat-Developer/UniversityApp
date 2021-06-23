<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
//calling the model
use DB;
//to use mysql query
use Illuminate\Http\Request;

class AdminArticlesController extends Controller
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
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.lang.en.articles.index')->with('articles', $articles);
    }

    public function search(Request $request)
    {
        $search = DB::table('articles')->where('title')->value('%' . $request . '%');
        return redirect('/admin/articles')->with('success', $search);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lang.en.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');

        //Handle file uploading
        if ($request->hasFile('cover_image')) {
            //Get filename with the extension
            $filenameWIthExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWIthExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filenmae to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $article->cover_image = $fileNameToStore;
        $article->save();

        return redirect('/admin/articles')->with('success', 'Article Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show the article
        $article = Article::find($id);
        return view('admin.lang.en.articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //edit article
        $article = Article::find($id);
        $host = $_SERVER['HTTP_HOST'];
        return view('admin.lang.en.articles.edit')
            ->with('host', $host)
            ->with('article', $article);
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
        //Handle file uploading
        if ($request->hasFile('cover_image')) {
            //Get filename with the extension
            $filenameWIthExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWIthExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filenmae to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->content = $request->input('content');

        if ($request->hasFile('cover_image')) {
            $article->cover_image = $fileNameToStore;
        }
        $article->save();

        return redirect('/admin/articles')->with('success', 'Article Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/admin/articles')->with('success', 'Article Removed');
    }

}
