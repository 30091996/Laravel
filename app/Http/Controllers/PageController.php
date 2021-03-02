<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function cvecara()
    {
        return view('cvecara');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function porudzbina()
    {
        return view('porudzbina');
    }
}
