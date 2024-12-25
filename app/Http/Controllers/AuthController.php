<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|confirmed|min:8',
        ]);

        // Create user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        // Log them in automatically (optional)
        auth()->login($user);

        // Redirect to some page
        return redirect()->route('home')->with('success', 'Account created! You are now logged in.');
    }

    public function authenticate(Request $request)
    {
        // Validate
        $credentials = $request->validate([
            'email'    => ['required','email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($credentials)) {
            // Regenerate session to avoid fixation
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Welcome back!');
        }

        // If login fails
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }
}
