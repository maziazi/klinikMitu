<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perawatan;

class TreatmentController extends Controller
{
    public function index()
    {
        $perawatans = Perawatan::all();
        return view('treatment', compact('perawatans'));
    }
}