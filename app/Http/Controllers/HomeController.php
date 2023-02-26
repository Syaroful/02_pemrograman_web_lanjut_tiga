<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        Return "Ini adalah Halaman Home";
    }
    public function about()
    {
        return view('about');
    }
}
