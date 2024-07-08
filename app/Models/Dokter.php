<?php
// app/Models/Dokter.php
// app/Models/Dokter.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';
    protected $primaryKey = 'idDokter';
    protected $fillable = [
        'namaDokter', 'umurDokter', 'spesialisasiDokter', 'fotoDokter'
    ];
}