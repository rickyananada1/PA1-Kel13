<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeKeluarga extends Model
{
    use HasFactory;
    protected $table = 'kode_keluargas';
    protected $primaryKey = "kode_keluarga";

    public function Keluarga(){
        return $this->hasMany(Kependudukan::class,'kode_keluarga');
    }
}
