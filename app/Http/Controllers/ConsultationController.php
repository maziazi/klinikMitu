<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultationController extends Controller
{
    public function index()
    {
        // Mengambil data dokter beserta kliniknya
        $doctors = DB::table('dokter')
                    ->join('konsultasi', 'dokter.idDokter', '=', 'konsultasi.idDokter')
                    ->join('klinik', 'konsultasi.idKlinik', '=', 'klinik.idKlinik')
                    ->select('dokter.idDokter', 'dokter.namaDokter as nama', 'dokter.spesialisasiDokter as deskripsi', 'dokter.fotoDokter as foto', 'konsultasi.hargaKonsultasi as harga', 'klinik.namaKlinik')
                    ->groupBy('dokter.idDokter', 'dokter.namaDokter', 'dokter.spesialisasiDokter', 'dokter.fotoDokter', 'konsultasi.hargaKonsultasi', 'klinik.namaKlinik')
                    ->get();

        // Mengirim data ke view consultation.index
        return view('consultation.index', compact('doctors'));
    }
}