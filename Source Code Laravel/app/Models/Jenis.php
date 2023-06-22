<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CategoryBerita extends Model
{
    use SoftDeletes;
    protected $table = 'categories_berita';
    protected $guarded = ['id'];  
}
