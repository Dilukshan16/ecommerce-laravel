<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->userType == 'user') {
    return view('dashboard');
            } else if (Auth::user()->userType == 'admin') {
return view('admin.dashboard');
            }
        }
    }
}