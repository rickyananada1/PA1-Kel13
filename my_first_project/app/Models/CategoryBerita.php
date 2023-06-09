<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBerita extends Model
{
    use HasFactory;
    protected $table = 'category_beritas';
    protected $guarded = ['id'];

    public function Berita()
    {
        return $this->hasMany(Berita::class, 'category_id');
    }
}
