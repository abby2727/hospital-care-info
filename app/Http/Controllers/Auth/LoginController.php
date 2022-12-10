<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    // public function authenticated()
    // {
    //     if (Auth::user()->is_admin == '1') {
    //         return redirect()->route('dashboard')->with('status', 'Welcome Admin!');
    //     } else if (Auth::user()->is_admin == '0') {
    //         return redirect()->route('home')->with('status', 'Welcome Dear Consumer!');
    //     } else {
    //         return redirect('/');
    //     }
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginPage()
    {
        return view('auth.login');
    }
}
