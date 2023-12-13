<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('adminLogout');
    }

    public function showAdminLoginForm()
    {
        return view('Admin::auth.login');
    }


    public function postLogin(AdminLoginRequest $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {


                return redirect()->intended('/admin');
            } else {
            dd(1454);
            return redirect()->route('auth.admin.login')->withErrors(['error' => 'Invalid credentials']);
        }
    }
    public function adminLogout()
    {

        Auth::logout();

        return redirect()->route('auth.showAdminLoginForm');


    }


}
