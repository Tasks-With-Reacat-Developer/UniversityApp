<?php

namespace App\Http\Controllers\Admin\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class AdminVerificationController extends Controller
{
    use VerifiesEmails;

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
    
}
