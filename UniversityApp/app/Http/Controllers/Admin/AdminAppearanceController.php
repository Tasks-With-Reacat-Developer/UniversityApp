<?php

namespace App\Http\Controllers\Admin;

use App\Brief;
use App\Dean_Sh;
use App\Future_Vision;
use App\Goal;
use App\Http\Controllers\Controller;
use App\Navbar;
use App\Nav_MultiLink;
use App\The_Message;
use DB;
use Illuminate\Http\Request;

class AdminAppearanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $pages = Navbar::all();
        $multilinks = Nav_MultiLink::all();
        $brief_en = Brief::where('language', 'en')->first();
        $brief_ar = Brief::where('language', 'ar')->first();
        $dean_en = Dean_Sh::where('language', 'en')->first();
        $dean_ar = Dean_Sh::where('language', 'ar')->first();
        $goals_en = Goal::where('language', 'en')->first();
        $goals_ar = Goal::where('language', 'ar')->first();
        $message_en = The_Message::where('language', 'en')->first();
        $message_ar = The_Message::where('language', 'ar')->first();
        $future_vision_en = Future_Vision::where('language', 'en')->first();
        $future_vision_ar = Future_Vision::where('language', 'ar')->first();
        return view('admin.lang.en.appearance.index')
            ->with('multilinks', $multilinks)
            ->with('pages', $pages)
            ->with('brief_en', $brief_en)
            ->with('brief_ar', $brief_ar)
            ->with('dean_en', $dean_en)
            ->with('dean_ar', $dean_ar)
            ->with('goals_en', $goals_en)
            ->with('goals_ar', $goals_ar)
            ->with('message_en', $message_en)
            ->with('message_ar', $message_ar)
            ->with('future_vision_en', $future_vision_en)
            ->with('future_vision_ar', $future_vision_ar);
    }

    public function createPage()
    {
        return view('admin.lang.en.appearance.pages.create');
    }

    public function editPage($id)
    {
        $page = Navbar::find($id);
        $multilinks = Nav_MultiLink::all();
        $multilink_id = 0;
        foreach ($multilinks as $multilnk) {
            if ($page->nav_id == $multilnk->id) {
                $multilink_id = $multilnk->id;
            }
        }
        $pages = DB::table('navbars')->where('nav_id', $multilink_id)->get();
        $multilink = DB::table('nav__multi_links')->where('id', $multilink_id)->first();
        return view('admin.lang.en.appearance.pages.edit')
            ->with('page', $page)
            ->with('multilink_id', $multilink_id)
            ->with('multilink', $multilink)
            ->with('pages', $pages);
    }

    public function storePage(Request $request)
    {
        //create validation in laravel project
        $this->validate($request, [
            'page_title' => 'required',
            'page_link' => 'required',
        ]);

        if ($request->input('multi-page-title')) {
            $multilink = new Nav_MultiLink();
            $multilink->title = $request->input('multi-page-title');
            $multilink->save();
        }

        $title = $request->input('page_title');
        $link = $request->input('page_link');
        $page = new Navbar();
        if ($request->input('multi-page-title')) {
            $page->nav_id = $multilink->id;
        }
        $page->page_title = $title;
        $page->link = $link;
        if ($page->nav_id) {
            $page->type = "multi";
        }
        $page->language = $request->input('language');
        $page->save();

        $titles = $request->get('pages_title');
        $links = $request->get('pages_link');
        if (is_array($titles) || is_object($titles)) {
            for ($i = 0; $i < count($titles); $i++) {
                $pages = new Navbar();
                $pages->nav_id = $multilink->id;
                $pages->page_title = $titles[$i];
                $pages->link = $links[$i];
                if ($pages->nav_id) {
                    $pages->type = "multi";
                }
                $pages->language = $request->input('language');
                $pages->save();
            }
        }

        return redirect('/admin/appearance')->with('success', 'Page Added!');
    }

    public function updatePage(Request $request, $id)
    {
        //create validation in laravel project
        $this->validate($request, [
            'page_title' => 'required',
            'page_link' => 'required',
        ]);
        $multilinks = Nav_MultiLink::all();
        $multilink_check = DB::table('navbars')->where('id', $id)->first();
        $count = 0;
        $multilink = 0;
        foreach ($multilinks as $multilink) {
            if ($multilink_check->nav_id == $multilink->id) {
                $multilink->title = $request->input('multi-page-title');
                $multilink->save();
            } else {
                if ($count > 0) {
                    if ($request->input('multi-page-title')) {
                        $multilink = new Nav_MultiLink();
                        $multilink->title = $request->input('multi-page-title');
                        $multilink->save();
                    }
                }
            }

        }

        $title = $request->input('page_title');
        $link = $request->input('page_link');
        if ($request->input('multi-page-title')) {
            $ids = DB::table('navbars')->where('nav_id', $multilink->id)->get();
        }
        $x = 0;
        if (is_array($title) || is_object($title)) {
            for ($y = 0; $y < count($title); $y++) {
                $page = Navbar::find($ids[$x++]->id);
                if ($request->input('multi-page-title')) {
                    $page->nav_id = $multilink->id;
                }
                $page->page_title = $title[$y];
                $page->link = $link[$y];
                if ($page->nav_id) {
                    $page->type = "multi";
                }
                $page->language = $request->input('language');
                $page->save();
            }
        } else {
            $page = Navbar::find($id);
            if ($request->input('multi-page-title')) {
                $page->nav_id = $multilink->id;
            }
            $page->page_title = $title;
            $page->link = $link;
            if ($page->nav_id) {
                $page->type = "multi";
            }
            $page->language = $request->input('language');
            $page->save();
        }

        $titles = $request->get('pages_title');
        $links = $request->get('pages_link');
        if (is_array($titles) || is_object($titles)) {
            for ($i = 0; $i < count($titles); $i++) {
                $pages = new Navbar();
                $pages->nav_id = $multilink->id;
                $pages->page_title = $titles[$i];
                $pages->link = $links[$i];
                if ($pages->nav_id) {
                    $pages->type = "multi";
                }
                $pages->language = $request->input('language');
                $pages->save();
            }
        }

        return redirect('/admin/appearance')->with('success', 'Page Updated!');

    }

    public function destroy($id)
    {
        $page = Navbar::find($id);
        $nav_multilink = Nav_MultiLink::where('id', $page->nav_id)->first();
        if ($nav_multilink) {
            $nav_multilink->delete();
        } else {
            $page->delete();
        }

        return redirect('/admin/appearance')->with('success', 'Page Deleted!');
    }

    public function createBriefAr()
    {
        return view('admin.lang.en.appearance.brief.ar.create');
    }

    public function createBriefEn()
    {
        return view('admin.lang.en.appearance.brief.en.create');
    }

    public function editBriefAr($id)
    {
        $brief = Brief::find($id);
        return view('admin.lang.en.appearance.brief.ar.edit')->with('brief', $brief);
    }

    public function editBriefEn($id)
    {
        $brief = Brief::find($id);
        return view('admin.lang.en.appearance.brief.en.edit')->with('brief', $brief);
    }

    public function storeBrief(Request $request)
    {
        //create validation in laravel project
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $brief = new Brief();
        $brief->title = $request->input('title');
        $brief->content = $request->input('content');
        $brief->language = $request->input('language');
        $brief->save();
        return redirect('/admin/appearance')->with('success', 'Brief Added!');
    }

    public function updateBrief(Request $request, $id)
    {
        //create validation in laravel project
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $brief = Brief::find($id);
        $brief->title = $request->input('title');
        $brief->content = $request->input('content');
        $brief->language = $request->input('language');
        $brief->save();
        return redirect('/admin/appearance')->with('success', 'Brief Updated!');
    }

    public function createDeanAr()
    {
        return view('admin.lang.en.appearance.dean.ar.create');
    }

    public function createDeanEn()
    {
        return view('admin.lang.en.appearance.dean.en.create');
    }

    public function editDeanAr($id)
    {
        $dean = Dean_Sh::find($id);
        return view('admin.lang.en.appearance.dean.ar.edit')->with('dean', $dean);
    }

    public function editDeanEn($id)
    {
        $dean = Dean_Sh::find($id);
        return view('admin.lang.en.appearance.dean.en.edit')->with('dean', $dean);
    }

    public function storeDean(Request $request)
    {
        //create validation in laravel project
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $dean = new Dean_Sh();
        $dean->title = $request->input('title');
        $dean->content = $request->input('content');
        $dean->language = $request->input('language');
        $dean->save();
        return redirect('/admin/appearance')->with('success', 'Dean\'s Speech Added!');
    }

    public function updateDean(Request $request, $id)
    {
        //create validation in laravel project
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $dean = Dean_Sh::find($id);
        $dean->title = $request->input('title');
        $dean->content = $request->input('content');
        $dean->language = $request->input('language');
        $dean->save();
        return redirect('/admin/appearance')->with('success', 'Dean\'s Speech Updated!');
    }

    public function createFutureVisionAr()
    {
        return view('admin.lang.en.appearance.others.future_vision.ar.create');
    }

    public function createFutureVisionEn()
    {
        return view('admin.lang.en.appearance.others.future_vision.en.create');
    }

    public function editFutureVisionAr($id)
    {
        $future_vision = Future_Vision::find($id);
        return view('admin.lang.en.appearance.others.future_vision.ar.edit')->with('future_vision', $future_vision);
    }

    public function editFutureVisionEn($id)
    {
        $future_vision = Future_Vision::find($id);
        return view('admin.lang.en.appearance.others.future_vision.en.edit')->with('future_vision', $future_vision);
    }

    public function storeFutureVision(Request $request)
    {
        //create validation in laravel project
        $this->validate($request, [
            'content' => 'required',
        ]);

        $future_vision = new Future_Vision();
        $future_vision->content = $request->input('content');
        $future_vision->language = $request->input('language');
        $future_vision->save();
        return redirect('/admin/appearance')->with('success', 'Future Vision Added!');
    }

    public function updateFutureVision(Request $request, $id)
    {
        //create validation in laravel project
        $this->validate($request, [
            'content' => 'required',
        ]);

        $future_vision = Future_Vision::find($id);
        $future_vision->content = $request->input('content');
        $future_vision->language = $request->input('language');
        $future_vision->save();
        return redirect('/admin/appearance')->with('success', 'Future Vision Updated!');
    }

    public function createMessageAr()
    {
        return view('admin.lang.en.appearance.others.message.ar.create');
    }

    public function createMessageEn()
    {
        return view('admin.lang.en.appearance.others.message.en.create');
    }

    public function editMessageAr($id)
    {
        $message = The_Message::find($id);
        return view('admin.lang.en.appearance.others.message.ar.edit')->with('message', $message);
    }

    public function editMessageEn($id)
    {
        $message = The_Message::find($id);
        return view('admin.lang.en.appearance.others.message.en.edit')->with('message', $message);
    }

    public function storeMessage(Request $request)
    {
        //create validation in laravel project
        $this->validate($request, [
            'content' => 'required',
        ]);

        $message = new The_Message();
        $message->content = $request->input('content');
        $message->language = $request->input('language');
        $message->save();
        return redirect('/admin/appearance')->with('success', 'The Message Added!');
    }

    public function updateMessage(Request $request, $id)
    {
        //create validation in laravel project
        $this->validate($request, [
            'content' => 'required',
        ]);

        $message = The_Message::find($id);
        $message->content = $request->input('content');
        $message->language = $request->input('language');
        $message->save();
        return redirect('/admin/appearance')->with('success', 'The Message Updated!');
    }

    public function createGoalsAr()
    {
        return view('admin.lang.en.appearance.others.goals.ar.create');
    }

    public function createGoalsEn()
    {
        return view('admin.lang.en.appearance.others.goals.en.create');
    }

    public function editGoalsAr($id)
    {
        $goals = Goal::find($id);
        return view('admin.lang.en.appearance.others.goals.ar.edit')->with('goals', $goals);
    }

    public function editGoalsEn($id)
    {
        $goals = Goal::find($id);
        return view('admin.lang.en.appearance.others.goals.en.edit')->with('goals', $goals);
    }

    public function storeGoals(Request $request)
    {
        //create validation in laravel project
        $this->validate($request, [
            'content' => 'required',
        ]);

        $goals = new Goal();
        $goals->content = $request->input('content');
        $goals->language = $request->input('language');
        $goals->save();
        return redirect('/admin/appearance')->with('success', 'Goals Added!');
    }

    public function updateGoals(Request $request, $id)
    {
        //create validation in laravel project
        $this->validate($request, [
            'content' => 'required',
        ]);

        $goals = Goal::find($id);
        $goals->content = $request->input('content');
        $goals->language = $request->input('language');
        $goals->save();
        return redirect('/admin/appearance')->with('success', 'Goals Updated!');
    }

}
