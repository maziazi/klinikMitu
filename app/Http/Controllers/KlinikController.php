<?php

// app/Http/Controllers/KlinikController.php

namespace App\Http\Controllers;

use App\Models\Klinik;
use Illuminate\Http\Request;

class KlinikController extends Controller
{
    public function index()
    {
        $kliniks = Klinik::all();

        return view('klinik.index', compact('kliniks'));
    }
}