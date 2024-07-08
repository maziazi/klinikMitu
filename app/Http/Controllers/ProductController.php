<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; // Pastikan model Produk diimpor

class ProductController extends Controller
{
    public function index()
    {
        $products = Produk::all(); // Mengambil semua data produk dari tabel Produk

        return view('products', compact('products'));
    }
}