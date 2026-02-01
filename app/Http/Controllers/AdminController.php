<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function adminHome()
    {
        return view('admin.home');
    }
    // admin users
    function adminUsers()
    {
        return view('admin.users');
    }

    public function users()
    {
        $users = User::where('id', '!=', Auth::id())->get();

        return view('admin.users', compact('users'));
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return back()->with('success','User Deleted Successfully');
    }

    public function restoreUser(User $id)
    {

    }
}
