<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('layouts.show');
    }

    public function menu()
    {
        return view('menu.index');
    }

    public function cabanas()
    {
        return view('layouts.cabanas');
    }
}
