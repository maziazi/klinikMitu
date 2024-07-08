<?php

// app/Models/Pasien.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'idPasien';
    public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

    // Hubungan one-to-many dengan konsultasi
    // public function konsultasis()
    // {
    //     return $this->hasMany(Konsultasi::class, 'idPasien', 'idPasien');
    // }
}