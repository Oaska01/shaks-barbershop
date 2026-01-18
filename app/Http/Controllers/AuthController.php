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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'unique:users,phone'],
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

    }
}
