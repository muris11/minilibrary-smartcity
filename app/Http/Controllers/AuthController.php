<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function showLoginForm()
    {
    return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function showRegisterForm()
    {
    return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nim' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        User::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    return redirect('/login')->with('success', 'Registrasi berhasil, silakan login.');
    }

    public function logout(Request $request)
    {
    Auth::logout();
    return redirect('/login');
    }

    public function showForgotForm()
    {
        return view('auth.forgot');
    }

    public function sendForgot(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ]);
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login')->with('success', 'Password berhasil diubah, silakan login.');
    }
}