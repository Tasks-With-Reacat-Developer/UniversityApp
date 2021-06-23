<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/student';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*if(Auth::guard('admin')->check())
        {
        $this->middleware('guest:admin')->except('logout');
        } else {
        $this->middleware('guest')->except('logout');
       }*/
        $this->middleware('guest')->except('logout');
       //$this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm(){
        if(session('language') == 'en'){
        return view('auth.login',['url' => 'user']);
        } else {
         return view('lang.ar.auth.login',['url' => 'user']);  
        }
     }

    /*public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/home');
        }
        return back()->withInput($request->only('email', 'remember'));
    }*/
}
