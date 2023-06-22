<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Berita;
use App\Models\Produk;
use App\Models\Struktur;
use App\Models\Kependudukan;
use App\Models\Category;
use App\Models\Meta;
use App\Models\CategoryBerita;
use App\Models\Pengumuman;

class FrontendController extends Controller
{
    public function index(){
        $strukturs =  Struktur::all();
        $galeris =  Galeri::all();
        $berita = Berita::all();
        $categoryproduk = Category::all();
        $categoryberita = CategoryBerita::all();
        $kependudukan = Kependudukan::all();
        $meta = Meta::all();
        return view('layouts.frontend.index',compact('strukturs','berita','galeris','categoryproduk','categoryberita','kependudukan','meta'));
    }
    public function IsiBerita($slug){
        $berita = Berita::where('slug',$slug)->first();
        $strukturs =  Struktur::all();
        $galeris =  Galeri::all();
        $categoryproduk = Category::all();
        $categoryberita = CategoryBerita::all();
        $meta = Meta::all();
        $pengumuman=Pengumuman::all();
        return view('layouts.frontend.berita.isi_berita',[
            'slug' => $berita
        ],compact('strukturs','berita','galeris','categoryproduk','categoryberita','meta','pengumuman'));
    }
    public function IsiPengumumans($slug){
        $berita = Berita::all();
        $strukturs =  Struktur::all();
        $galeris =  Galeri::all();
        $categoryproduk = Category::all();
        $categoryberita = CategoryBerita::all();
        $meta = Meta::all();
        $pengumuman=Pengumuman::where('slug',$slug)->first();
        return view('layouts.frontend.pengumuman.isi_pengumuman',[
            'slug' => $pengumuman
        ],compact('strukturs','berita','galeris','categoryproduk','categoryberita','meta','pengumuman'));
    }
        public function Produk(){
            $strukturs =  Struktur::all();
            $galeris =  Galeri::all();
            $categoryproduk = Category::all();
            $categoryberita = CategoryBerita::all();
            $produks = Produk::all();
            $meta = Meta::all();
            return view('layouts.frontend.produk.produk',compact('produks','strukturs','galeris','categoryproduk','categoryberita','meta'));
        }    
        public function Berita(){
            $strukturs =  Struktur::all();
            $galeris =  Galeri::all();
            $categoryproduk = Category::all();
            $categoryberita = CategoryBerita::all();
            $berita = Berita::all();
            $meta = Meta::all();
            return view('layouts.frontend.berita.berita',compact('berita','strukturs','galeris','categoryproduk','categoryberita','meta'));
        }    
        public function Galeri(){
            $strukturs =  Struktur::all();
            $galeris =  Galeri::all();
            $berita = Berita::all();
            $categoryproduk = Category::all();
            $categoryberita = CategoryBerita::all();
            $meta = Meta::all();
            return view('layouts.frontend.galeri.galeri',compact('strukturs','berita','galeris','categoryproduk','categoryberita','meta'));
        }

        public function IsiGaleri($slug){
            $galeri = Galeri::where('slug',$slug)->first();
            $strukturs =  Struktur::all();
            $galeris =  Galeri::all();
            $categoryproduk = Category::all();
            $categoryberita = CategoryBerita::all();
            $meta = Meta::all();
            return view('layouts.frontend.galeri.isi_galeri',[
                'slug' => $galeri
            ],compact('strukturs','galeri','galeris','categoryproduk','categoryberita','meta'));
        }
        public function IsiHalaman($meta_name){
            $galeris =  Galeri::all();
            $strukturs =  Struktur::all();
            $meta = Meta::all();
            $metas = Meta::where('meta_name',$meta_name)->first();
            $categoryproduk = Category::all();
            $categoryberita = CategoryBerita::all();
            return view('layouts.frontend.Halaman.Halamans',[
            'metas'=>$metas],compact('strukturs','metas','galeris','categoryproduk','categoryberita','meta'));
        }
        public function IsiPengumuman(){
            $strukturs =  Struktur::all();
            $galeris =  Galeri::all();
            $berita = Berita::all();
            $categoryproduk = Category::all();
            $categoryberita = CategoryBerita::all();
            $meta = Meta::all();
            $pengumuman=Pengumuman::all();

            return view('layouts.frontend.pengumuman.pengumuman',compact('pengumuman','strukturs','berita','galeris','categoryproduk','categoryberita','meta'));
        }
}
