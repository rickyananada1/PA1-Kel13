<?php

namespace App\Http\Controllers;

use App\Models\Darah;
use App\Models\Category;
use App\Models\CategoryBerita;
use App\Models\Kependudukan;
use App\Models\Meta;
use Illuminate\Http\Request; // Add the import statement for Request

class HalamanController extends Controller
{
    public function datadesa(Request $request)
{
    $golonganDarah = Kependudukan::pluck('golongan_darah')->toArray();
    $categoryproduk = Category::all();
    $categoryberita = CategoryBerita::all();
    // ... Other logic
    
    $perPage = $request->input('perPage', null);
  
    if ($perPage == 0) {
        $kependudukan = Kependudukan::get();
    } else {
        $kependudukan = Kependudukan::paginate($perPage);
    }
    

    $meta = Meta::all();

    return view('layouts.frontend.datadesa', compact('golonganDarah', 'categoryproduk', 'categoryberita', 'kependudukan', 'perPage','meta'));
}

}
