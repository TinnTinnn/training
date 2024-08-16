<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AppController extends Controller
{
    public function login() : View
    {
        return view('login');
    }

    public function home()
    {
        return view ('app.home');
    }

    public function contact()
    {
        return redirect('https://www.google.com');
    }
}
