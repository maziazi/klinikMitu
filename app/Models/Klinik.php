<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    use HasFactory;

    protected $table = 'klinik';
    protected $primaryKey = 'idKlinik';
    public $timestamps = false; // Jika tidak menggunakan timestamps

    protected $fillable = [
        'namaKlinik',
        'alamatKlinik',
        'noTelpKlinik',
    ];

    // Relationships or additional methods can be added here
}