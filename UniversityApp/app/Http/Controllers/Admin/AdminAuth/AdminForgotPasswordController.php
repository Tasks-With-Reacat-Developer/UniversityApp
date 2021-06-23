<?php

namespace App\Http\Controllers\Admin\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class AdminForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }
    
}
