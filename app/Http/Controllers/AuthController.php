<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return $this->redirectUser(Auth::user());
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return $this->redirectUser(Auth::user());
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Logged out successfully.');
    }

    protected function redirectUser($user)
    {
        if ($user->isAdmin()) {
            return redirect()->route('admin.dashboard')->with('success', 'Welcome to the Admin Dashboard!');
        } elseif ($user->isVendor()) {
            return redirect()->route('vendor.dashboard')->with('success', 'Welcome to your Vendor Dashboard!');
        } elseif ($user->isAgent()) {
            return redirect()->route('agent.dashboard')->with('success', 'Welcome to your Agent Dashboard!');
        }

        return redirect()->route('home');
    }
}
