<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    protected $table = 'konsultasi';
    protected $primaryKey = 'idKonsultasi';
    public $timestamps = false; // Jika tidak menggunakan timestamp
    
    // Definisikan relasi dengan model Dokter dan Pasien jika diperlukan
    // public function dokter()
    // {
    //     return $this->belongsTo(Dokter::class, 'idDokter');
    // }

    // public function pasien()
    // {
    //     return $this->belongsTo(Pasien::class, 'idPasien');
    // }
}