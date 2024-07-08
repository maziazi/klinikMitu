<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        // Paginate the results to show 5 per page
        $dokters = Dokter::paginate(4);
        
        // Pass the paginated list of doctors to the view
        return view('index', compact('dokters'));
    }
}