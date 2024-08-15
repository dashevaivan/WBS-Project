<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // Show the registration form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle the registration process
    public function register(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15|unique:users',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
                'confirmed',
            ],
            'occupation' => 'required|string|max:255',
        ]);

        try {
            $user = User::create([
                'full_name' => $request->full_name,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'occupation' => $request->occupation,
            ]);

            $user->sendEmailVerificationNotification();
            Auth::login($user);

            return redirect()->route('verification.notice');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Registrasi gagal, mohon coba lagi.']);
        }
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle the login process
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if ($request->email === 'admin@gmail.com') {
            if (Auth::guard('admin')->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            }
        } else {
            if (Auth::guard('web')->attempt($credentials)) {
                $request->session()->regenerate();

                if (Auth::user()->hasVerifiedEmail()) {
                    return redirect()->intended('/dashboard');
                } else {
                    Auth::logout();
                    return redirect()->route('login')->withErrors(['email' => 'Anda harus melakukan verifikasi email sebelum bisa login.']);
                }
            }
        }

        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput($request->only('email'));
    }

    // Handle the logout process
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda telah keluar.');
    }

    // Show the password reset request form
    public function showLinkRequestForm()
    {
        return view('auth.resetpass');
    }

    // Handle sending the password reset link
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    // Show the password reset form
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.changepass')->with([
            'token' => $token,
            'email' => $request->email,
        ]);
    }

    // Handle the password reset process
    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8|confirmed',
            'token' => 'required',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
