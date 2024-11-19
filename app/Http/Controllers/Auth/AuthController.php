<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }


    public function login()
    {
        return view('auth.login');
    }
    public function login_post(LoginRequest $request)
    {
        if($this->auth::attempt(['email' => $request->email , 'password' => $request->password]))
        {
            return redirect()->route('dashboard');
        }
        
        return redirect()->back()->withErrors(['password' => 'Hatalı şifre! lütfen tekrar deneyiniz.'])->withInput();

    }
    public function logout()
    {
        $this->auth::logout();
        return redirect('login');
    }
}
