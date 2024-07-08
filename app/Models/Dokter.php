<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';

    protected $primaryKey = 'idDokter';

    protected $fillable = [
        'namaDokter',
        'umurDokter',
        'spesialisasiDokter',
        'fotoDokter',
    ];

    public $timestamps = false; // If you don't have created_at and updated_at columns
}