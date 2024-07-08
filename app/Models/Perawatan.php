<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    use HasFactory;

    protected $table = 'perawatan';
    protected $primaryKey = 'idPerawatan';
    public $timestamps = false;

    protected $fillable = [
        'namaPerawatan',
        'deskripsiPerawatan',
        'idKonsultasi',
        'hargaPerawatan',
        'manfaatPerawatan',
    ];
}