<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function explore()
    {
        return view('explore');
    }

    public function detail($id)
    {
        return view('detail');
    }

    public function checkout($id)
    {
        return view('checkout');
    }
}
