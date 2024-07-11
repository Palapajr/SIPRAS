<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        // echo "selamat ";
        return view('dashboard.dashboard');
    }

    function user()
    {
        // echo "selamat ";
        return view('dashboard.dashboard');
    }
}
