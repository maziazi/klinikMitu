<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        // Kembalikan view yang sesuai untuk halaman konsultasi
        return view('konsultasi');
    }
}
