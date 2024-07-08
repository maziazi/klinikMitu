<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk'; // Sesuaikan dengan nama tabel di database

    protected $primaryKey = 'idProduk'; // Sesuaikan dengan nama primary key

    protected $fillable = [
        'namaProduk',
        'jenisProduk',
        'deskripsiProduk',
        'gambarProduk',
        'bahanProduk',
        'hargaProduk',
    ];

    // Jika primary key bukan auto-increment (misalnya UUID), tambahkan baris berikut:
    // public $incrementing = false;
}