<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function showLoginForm()
    {
        return view('partials.login');
    }

    /**
     * @return RedirectResponse
     */
    public function login(): RedirectResponse
    {
        try {
            $validator = Validator::make(request()->all(), [
                'username' => 'required',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->to('/login')->with('error', $validator->errors()->first());
            }
            $username = request()->username;
            User::where('username', $username)->firstOrFail();
            $credentials = request()->only('username', 'password');
            if (!Auth::attempt($credentials)) {
                return redirect()->to('/login')->with('error', 'You have entered invalid credentials');
            }
            return redirect()->route('category.list')->with('success', 'You are successfully logged in');
        } catch (\Exception$e) {
            return redirect()->to('/login')->with('error', $e->getMessage());
        }
    }

    /**
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        try {
            Auth::logout();
            return redirect()->to('/login')->with('success', 'You are successfully log out');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
