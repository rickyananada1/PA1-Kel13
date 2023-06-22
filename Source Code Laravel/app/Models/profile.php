<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jabatan',
        'email',
        'avatar',
    ];

    protected $table = 'users'; // Sesuaikan dengan nama tabel yang sesuai

    // Optional: Jika kolom updated_at dan created_at tidak ada dalam tabel, tambahkan baris berikut:
    // public $timestamps = false;

    // Optional: Jika primary key bukan 'id', tambahkan baris berikut:
    // protected $primaryKey = 'id';

    // Optional: Jika Anda menggunakan kolom 'avatar', pastikan untuk mendefinisikan accessor untuk URL avatar
    // public function getAvatarUrlAttribute()
    // {
    //     return asset('storage/' . $this->avatar);
    // }
}
