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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'occupation' => 'required|string|max:255',
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'occupation' => $request->occupation,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login'); // This will be the same login form for both admin and users
    }

    // Handle the login process for both admin and user
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        // Check if the email is the admin email
        if ($request->email === 'admin@gmail.com') {
            if (Auth::guard('admin')->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard'); // Redirect to admin dashboard
            }
        } else {
            // Normal user login
            if (Auth::guard('web')->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard'); // Redirect to user dashboard
            }
        }

        // If login fails
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->withInput($request->only('email'));
    }

    // Handle the logout process for both users and admins
    public function logout(Request $request)
    {
        Auth::logout(); // Logs out the user from the current guard
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'You have been logged out.');
    }

    // Show the password reset request form
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    // Handle sending the password reset link
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    // Show the password reset form
    public function showResetForm($token)
    {
        return view('auth.passwords.reset', ['token' => $token]);
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

    // Show the admin login form (although not used in your case, it's here for reference)
    public function showAdminLoginForm()
    {
        return view('auth.admin-login'); // This can be removed if you're using a single login form for both
    }
}
