<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\AccessLogs;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index() {
        return view('login');
    }

    public function authenticate(Request $request) {

        $credentials['phone'] = preg_replace('/[^0-9]/', '', $request->phone);


        if (Auth::attempt(['phone' => $credentials['phone'], 'password' => $request->password])) {
            $log = new AccessLogs;
            $log->user_id = Auth::user()->id;
            $log->save();

            return redirect()->route('home');
        } else {
            return back()->with('error', 'Usuário e/ou senha incorreto(s).');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    public function recover() {

        return view('recover');
    }

    public function recovercode(Request $request) {
        $email = $request['email'];
        $code = strval(rand(1000, 9999));

        \Illuminate\Support\Facades\Mail::send(new \App\Mail\recoverpass($email, $code));

        return view('confirmcode');
    }

}
