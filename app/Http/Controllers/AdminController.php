<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function adminHome()
    {
        return view('admin.home');
    }
}
