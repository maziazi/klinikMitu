<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index()
    {
        // Kembalikan view yang sesuai untuk halaman perawatan
        return view('perawatan');
    }
}
