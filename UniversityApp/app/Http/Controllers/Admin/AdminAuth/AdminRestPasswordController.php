<?php

namespace App\Http\Controllers\Admin\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class AdminRestPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function RestPassword(){
    $host = $_SERVER['SERVER_NAME'];
    return view('admin.lang.en.auth.password.email')->with('host',$host);

    }

    public function email(){
    $host = $_SERVER['HTTP_HOST'];
     return view('admin.lang.en.auth.password.reset')->with('host',$host);

    }
}
