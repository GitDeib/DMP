<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Find admin by email
        $admin = Admin::where('email', $request->email)->first();

        // Check plain-text password manually
        if ($admin && $admin->password === $request->password) {
            // Log in using admin guard
            Auth::guard('admin')->login($admin, $request->filled('remember'));

            $request->session()->regenerate();
            return redirect()->intended('/Admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our admin records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin-login');
    }
}
