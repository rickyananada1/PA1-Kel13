<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kependudukan extends Model
{
    use SoftDeletes;
    protected $table = 'kependudukans';
    protected $primaryKey = 'id_kependudukan';
    public $timestamps = false;
    protected $fillable = [
        'id_kependudukan',
        'nama',
        'status',
        'alamat',
        'date_of_birth',
        'agama',
        

    ];
}
