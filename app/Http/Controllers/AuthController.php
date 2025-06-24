<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ProductController;

class AuthController
{
    // Display login view
    public function login()
    {
        // If allready connected, redirection
        if (auth()->check()) {
            return redirect()->route('products.index');
        }

        return view('auth.login');
    }

    // Login Submit
    public function loginSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboard')
                ->with('success', 'Connected');
        }

        return redirect()->back()->withErrors(['Invalid credentials'])->withInput();
    }

    // Display register view
    public function register()
    {
        // If allready connected, redirection
        if (auth()->check()) {
            return redirect()->route('products.index');
        }

        return view('auth.register');
    }

    // Register Submit
    public function registerSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboard')
                ->with('success', 'Connected');
        }

        return redirect()->back()->withErrors(['Invalid credentials'])->withInput();
    }

    // Display login view
    public function forgotPassword()
    {
        // If allready connected, redirection
        if (auth()->check()) {
            return redirect()->route('products.index');
        }

        return view('auth.reset-password');
    }

    // Login Submit
    public function forgotPasswordSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboard')
                ->with('success', 'Connected');
        }

        return redirect()->back()->withErrors(['Invalid credentials'])->withInput();
    }

    // Deconnection
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/')->with('success', 'Disconnected');
    }
}
