<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('dashboard', [
            'user' => auth()->user()
        ]);
    }

    public function profile()
    {
        return view('user.profile', [
            'user' => auth()->user()
        ]);
    }
}