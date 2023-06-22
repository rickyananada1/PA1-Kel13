<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Darah extends Model
{
    use HasFactory;

    protected $table = 'kependudukan'; // Nama tabel di database

    protected $fillable = [
        'golongan_darah',
    ];

    // Tambahkan relasi atau metode lain yang sesuai dengan kebutuhan Anda
}
