<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\StrukturController;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('layouts.frontend.index');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'


])->group(function () {
  
    Route::get('/dashboard', function () {
        $users = DB::table('users')->latest()->paginate(5);
        return view('layouts.backend.main',compact('users'));
    })->name('dashboard');


Route::get('/Berita',[CategoryController::class,'Berita'])->name('user.berita');
Route::get('/Darah',[CategoryController::class,'Darah'])->name('user.darah');
Route::get('/Kelamin',[CategoryController::class,'Kelamin'])->name('user.kelamin');
Route::get('/Pekerjaan',[CategoryController::class,'Pekerjaan'])->name('user.pekerjaan');
Route::get('/Data',[CategoryController::class,'Kependudukan'])->name('user.kependudukan');
Route::get('/category/all',[CategoryController::class,'AllCat'])->name('all.category');
Route::post('/category/add',[CategoryController::class,'AddCat'])->name('store.category');
Route::get('/Geografis',[CategoryController::class,'Geografis'])->name('user.geografis');
Route::get('/Sejarah',[CategoryController::class,'Sejarah'])->name('user.sejarah');
Route::get('/Organisasi',[CategoryController::class,'Organisasi'])->name('user.organisasi');
Route::get('/Kontak',[CategoryController::class,'Kontak'])->name('user.kontak');
Route::get('/Desa',[CategoryController::class,'Desa'])->name('user.desa');
Route::get('/Produk',[CategoryController::class,'Produk'])->name('user.produk');
Route::get('/Galersi',[GaleriController::class,'Galeri'])->name('user.galeri');





Route::get('/Penduduk',[PendudukController::class,'Penduduk'])->name('user.penduduk');
Route::get('/Penduduk/tambah',[PendudukController::class,'AddPenduduk'])->name('tambah.penduduk');
Route::post('/Penduduk/add',[PendudukController::class,'AddData'])->name('add.penduduk');
Route::get('/Penduduk/edit/{id_kependudukan}',[PendudukController::class,'EditData']);
Route::post('/Penduduk/update/{id_kependudukan}',[PendudukController::class,'UpdateData']);
Route::get('/Penduduk/softdelete/{id_kependudukan}',[PendudukController::class,'SoftDelete']);
Route::get('/Penduduk/deletes',[PendudukController::class,'Delpenduduk'])->name('hapus.penduduk');
Route::get('/Penduduk/restore/{id}',[PendudukController::class,'Restore']);
Route::get('/Penduduk/delete/{id}',[PendudukController::class,'DeltPerm']);


Route::get('/Galeri',[GaleriController::class,'AllGaleri'])->name('users.galeri');
Route::get('/Galeri/add',[GaleriController::class,'AddGaleri'])->name('add.galeri');
Route::post('/Galeri/add/gambar',[GaleriController::class,'AddGambar'])->name('add.gambar');
Route::get('/Galeri/edit/gambar/{id}',[GaleriController::class,'EditGaleri'])->name('edit.gambar');
Route::post('/Galeri/update/gambar/{id}',[GaleriController::class,'UpdateGaleri'])->name('update.gambar');
Route::get('/Galeri/deletes/{id}',[GaleriController::class,'DelGaleri']);


Route::get('/Beritas',[BeritaController::class,'Berita'])->name('users.berita');
Route::get('/Berita/add',[BeritaController::class,'AddBerita'])->name('add.berita');
Route::post('/Berita/add/gambar',[BeritaController::class,'AddIsiBerita'])->name('add.isiberita');
Route::get('/Berita/edit/berita/{id}',[BeritaController::class,'EditBerita'])->name('edit.isiberita');
Route::post('/Berita/update/gambar/{id}',[BeritaController::class,'UpdateBerita'])->name('update.isiberita');
Route::get('/Berita/deletes/{id}',[BeritaController::class,'DelBerita']);


Route::get('/Produks',[ProdukController::class,'Produk'])->name('users.produk');
Route::get('/Produk/add',[ProdukController::class,'AddProduk'])->name('add.produk');
Route::post('/Produk/add/produk',[ProdukController::class,'AddIsiProduk'])->name('add.isiproduk');
Route::get('/Produk/edit/Produk/{id}',[ProdukController::class,'EditProduk'])->name('edit.isiproduk');
Route::post('/Produk/update/Produk/{id}',[ProdukController::class,'UpdateProduk'])->name('update.isiproduk');
Route::get('/Produk/deletes/{id}',[ProdukController::class,'DelProduk']);


Route::get('/Struktur',[StrukturController::class,'Struktur'])->name('users.struktur');
Route::get('/Struktur/add',[StrukturController::class,'AddStruktur'])->name('add.struktur');
Route::post('/Struktur/add/Struktur',[StrukturController::class,'AddIsiStruktur'])->name('add.isistruktur');
Route::get('/Struktur/edit/Struktur/{id}',[StrukturController::class,'EditStruktur'])->name('edit.isistruktur');
Route::post('/Struktur/update/Struktur/{id}',[StrukturController::class,'UpdateStruktur'])->name('update.isistruktur');
Route::get('/Struktur/deletes/{id}',[StrukturController::class,'DelStruktur']);
}
);
Route::get('/user/logout',[PendudukController::class,'Logout'])->name('user.logout');