<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use function Laravel\Prompts\alert;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            $userId = Auth::id();
            // Lưu ID người dùng vào session
            Session::put('user_id', $userId);

            $user = Auth::user();
            if ($user && $user->role == 'admin') {
                return redirect()->intended(RouteServiceProvider::DASHBOARD);
            } else {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        } else {
            // Đăng nhập thất bại
            return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
        }

        //cach 2
        // $credentials = $request->only('username', 'password');

        // if (Auth::attempt($credentials)) {
        //     // Đăng nhập thành công
        //     return redirect()->intended('/dashboard');
        // } else {
        //     // Đăng nhập thất bại
        //     return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
        // }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function showRegistrationForm()
    {
        return view('Signup');
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'repeat-password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 'user';
            $user->save();
            return redirect('/');
        }
    }
}
