<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Message;
use Auth;
use DB;
use Illuminate\Http\Request;

class AdminMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.lang.en.messages.index')->with('messages', $messages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create validation in laravel project
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'content' => 'required',
        ]);

        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $content = $request->input('content');

        $message = new Message();
        $message->name = $name;
        $message->phone = $phone;
        $message->email = $email;
        $message->content = $content;
        $message->save();
        return redirect('/contact')->with('success', 'Message sent..');
    }

    public function contact()
    {
        if (Auth::check()) {
            $student_lang = DB::table('languages')->where('student_id', Auth::user()->id)->first();
            if ($student_lang) {
                if ($student_lang->language == 'en') {
                    return view('lang.en.contact.contact');
                } elseif ($student_lang->language == 'ar') {
                    return view('lang.ar.contact.contact');
                }
            }
        }
        if (session('language') == 'en') {
            return view('lang.en.contact.contact');
        } else {
            return view('lang.ar.contact.contact');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::find($id);
        return view('admin.lang.en.messages.show')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect('/admin/messages')->with('success', 'Message Removed!');
    }
}
