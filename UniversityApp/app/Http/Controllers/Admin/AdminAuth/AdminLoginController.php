<?php

namespace App\Http\Controllers\Admin\AdminAuth;

use App\AdminUser;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm(){

        return view('admin.lang.en.auth.login',['url' => 'admin']);

    }

    public function login(Request $request)
    {
       /* $this->validate($request, [
         'userName' => 'required|userName',
         'password' => 'required|min:6'
        ]);*/
        if (Auth::guard('admin')->attempt(['userName' => $request->username, 'password' => $request->password], $request->get('remember'))) {

            //return redirect()->intended('/admin');
            return redirect('/admin');
        }
        return back()->withInput($request->only('username', 'remember'));
        /*$AdminUser = new AdminUser;
        $user = AdminUser::where('userName', '=', $request->input('UserN_Email'))->exists();
        //$email = AdminUser::where('email', '=', $request->input('UserN_Email'))->exists();
        $password = AdminUser::where('password', '=', Hash::check($request->input('password'),$AdminUser->getAuthPassword()))->exists();
        
        if($email && $password){
          return redirect('/admin');
        } else {
            //just for test
           //echo "error";
           //echo $user;
           return redirect('/admin/login');
        }*/
     

    }

    public function logout(Request $request) 
    {
        /*
        Auth::logout();
        return redirect('/admin/login');
        */
        Auth::guard('admin')->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->guest(route( 'admin.login' ));
      }


}
