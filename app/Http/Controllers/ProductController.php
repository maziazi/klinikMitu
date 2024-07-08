<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Kembalikan view yang sesuai untuk halaman produk
        return view('produk');
    }
}