<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // app/Http/Controllers/AdminController.php
public function __construct()
{
    $this->middleware('auth');
    $this->middleware('admin'); // Must come after auth middleware
}

    public function dashboard()
    {
        return view('admin.home', [
            'admin' => auth()->user()
        ]);
    }
}