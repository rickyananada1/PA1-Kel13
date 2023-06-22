<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kependudukan extends Model
{

    protected $table = 'kependudukan';
    protected $guarded = ['nik'];

    public function categorykeluarga()
    {
        return $this->belongsTo(KodeKeluarga::class, 'kode_keluarga');
    }
}
