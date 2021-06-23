<?php

namespace App\Http\Controllers\Admin\AdminAuth;

use App\AdminUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class AdminRegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/admin/users';

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $adminusers = AdminUser::all();
        return view('admin.lang.en.auth.index')->with('adminusers',$adminusers);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'userName' => ['required', 'string', 'userName', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'userName' => $data['userName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm(){

        return view('admin.lang.en.auth.register',['url' => 'admin']);
    }

    public function register(Request $request){
                //create validation in laravel project
        $this->validate($request, [
        'firstName' => 'required',
        'lastName' => 'required',
        'userName' => 'required',
        'email' => 'required',
        'password' => 'required',
        ]);
        $AdminUser = new AdminUser;
        $AdminUser->firstName = $request->input('firstName');
        $AdminUser->lastName = $request->input('lastName');
        $AdminUser->userName = $request->input('userName');
        $AdminUser->email = $request->input('email');
        $AdminUser->password = Hash::make($request->input('password'));
        $AdminUser->save();

        return redirect('/admin/users')->with('success', 'New Admin User Added!');
    }

    public function edit($id){
        $adminuser = AdminUser::find($id);
        return view('admin.lang.en.auth.edit')->with('adminuser',$adminuser);
    }

    public function update(Request $request, $id){
        //create validation in laravel project
        $this->validate($request, [
        'firstName' => 'required',
        'lastName' => 'required',
        'userName' => 'required',
        'email' => 'required',
        'password' => 'required',
         ]);
        $AdminUser = AdminUser::find($id);
        $AdminUser->firstName = $request->input('firstName');
        $AdminUser->lastName = $request->input('lastName');
        $AdminUser->userName = $request->input('userName');
        $AdminUser->email = $request->input('email');
        $AdminUser->password = Hash::make($request->input('password'));
        $AdminUser->save();
        return redirect('/admin/users')->with('success', 'User Updated');
    }

    public function destroy($id){
        $adminuser = AdminUser::find($id);
        $adminuser->delete();
        return redirect('/admin/users')->with('success', 'User Removed');
    }

}
