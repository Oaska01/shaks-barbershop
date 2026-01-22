<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Get Registartion
    function registrationView()
    {
        return view('auth.registration');
    }
    // Post Registration
    function registration(Request $request)
    {
        $fields = $request -> validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'string','unique:users,phone_number'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'policy' => 'accepted'
        ]);

        $user = User::create($fields);

        Auth::login($user);
        return redirect()->route('index');
    }

    // Get Login
    function loginView()
    {
        return view('auth.login');
    }
    //Post Login
    function login(Request $request)
    {
        $fields = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($fields))
            {
                return redirect()->route('index');
            }

            return back() ->withErrors([
                'email' => 'The Provided Credentials Do Not Match The Records!'
            ]);

            return redirect()->back()->with('error', 'Invalid Credentials');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
