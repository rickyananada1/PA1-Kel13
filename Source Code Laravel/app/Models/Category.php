<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $table = 'kategori_produk';
    protected $guarded = ['id'];  


      public function Produk(){
        return $this->hasMany(Produk::class);
  }
  
}
