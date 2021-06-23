<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
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
        $pages = Page::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.lang.en.nav_pages.index')->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lang.en.nav_pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();
        $page->title = $request->input('title');
        $page->content = $request->input('content');
        $page->save();

        return redirect('/admin/pages')->with('success', 'Page Created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit page
        $page = Page::find($id);
        $host = $_SERVER['HTTP_HOST'];
        return view('admin.lang.en.nav_pages.edit')
            ->with('host', $host)
            ->with('page', $page);
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
        $page = Page::find($id);
        $page->title = $request->input('title');
        $page->content = $request->input('content');
        $page->save();

        return redirect('/admin/pages')->with('success', 'Page Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect('/admin/pages')->with('success', 'Page Removed');
    }

    public function search()
    {
        $searchArticles = $_GET['query'];
        $pages = Page::where('title', "LIKE", "%" . $searchArticles . "%")->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.lang.en.nav_pages.search', compact('pages'));
    }

}
