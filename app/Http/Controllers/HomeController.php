<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Kembalikan view yang sesuai untuk halaman home
        return view('home');
    }
}
