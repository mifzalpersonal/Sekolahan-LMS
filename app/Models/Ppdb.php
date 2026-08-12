<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    protected $fillable = [
        'nisn', 
        'nik', 
        'nama', 
        'kelamin',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'nomor_hp_siswa',

        // pemisah

        'nama_ortu',
        'nomor_hp_ortu',

        //pemisah lagi

        'asal_sekolah',
        'jurusan',
        'status',
    ];
}
