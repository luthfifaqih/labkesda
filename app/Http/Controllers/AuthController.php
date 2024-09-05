<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        $title['title'] = 'Halaman Registrasi Akun';
        return view('auth.register', $title);
    }

    public function actionregister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        return redirect()->intended('login');
    }

    public function login()
    {
        $title['title'] = 'Halaman Login';
        return view('auth.login', $title);
    }

    public function actionlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        // if (!$user || !$user->hasVerifiedEmail()) {
        //     return back()->withErrors([
        //         'email' => 'Anda belum melakukan verifikasi akun. Silahkan cek email untuk melakukan verifikasi.',
        //     ]);
        // }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
            // return response()->json(['success' => true]);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        // return response()->json(['success' => false, 'message' => 'Email atau password salah.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
