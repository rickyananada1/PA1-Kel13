<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $guarded = ['id'];
    
    public function categoryberita(){
        return $this->belongsTo(Categoryberita::class,'category_id');
    }
    public function admin()
{
    return $this->belongsTo(User::class,'id_user');
}
}
