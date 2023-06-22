<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Galeri;
use App\Models\Berita;
use App\Models\Struktur;
use App\Models\Category;
use App\Models\CategoryBerita;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\CategoryBeritaController;
use App\Http\Controllers\KodeKeluargaController;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontendController::class,'index']);

Route::get('/Isi_berita/{slug}',[FrontendController::class,'IsiBerita'])->name('isi_berita');
Route::get('/Isi_pengumuman/{slug}',[FrontendController::class,'IsiPengumumans'])->name('isi_pengumumans');
Route::get('/Isi_Galeri/{slug}',[FrontendController::class,'IsiGaleri'])->name('isi_galeri');
Route::get('/Produk/Category/{category_name}',[FrontendController::class,'CategoryProduk'])->name('category_produk');
Route::get('/Berita/Category/{category_name}',[FrontendController::class,'CategoryBerita'])->name('category_berita');
Route::get('/Berita',[FrontendController::class,'Berita'])->name('index.berita');
Route::get('/Produk',[FrontendController::class,'Produk'])->name('index.produk');
Route::get('/Galeri',[FrontendController::class,'Galeri'])->name('category_galeri');
Route::get('/Desa/Halaman/{meta_name}',[FrontendController::class,'IsiHalaman'])->name('halaman.desa');
Route::get('/Desa/Pengumuman',[FrontendController::class,'IsiPengumuman'])->name('halaman.pengumuman');
Route::get('/datadesa', [HalamanController::class, 'datadesa'])->name('user.datadesa');


Route::get('/dashboard', function () {
    return view('layouts.backend.main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


Route::get('/Penduduk',[PendudukController::class,'Penduduk'])->name('user.penduduk');
Route::get('/Penduduk/tambah',[PendudukController::class,'AddPenduduk'])->name('tambah.penduduk');
Route::post('/Penduduk/add',[PendudukController::class,'AddData'])->name('add.penduduk');
Route::get('/Penduduk/edit/{nik}',[PendudukController::class,'EditData']);
Route::post('/Penduduk/update/{nik}',[PendudukController::class,'UpdateData']);
Route::get('/Penduduk/softdelete/{nik}',[PendudukController::class,'SoftDelete']);
Route::get('/Penduduk/deletes',[PendudukController::class,'Delpenduduk'])->name('hapus.penduduk');



Route::get('/Galeris',[GaleriController::class,'AllGaleri'])->name('users.galeri');
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


Route::get('/Category',[CategoryController::class,'Category'])->name('users.category');
Route::get('/Category/add',[CategoryController::class,'AddCategory'])->name('add.category');
Route::post('/Category/add/Category',[CategoryController::class,'AddIsiCategory'])->name('add.isicategory');
Route::get('/Category/edit/Category/{id}',[CategoryController::class,'EditCategory'])->name('edit.isicategory');
Route::post('/Category/update/Category/{id}',[CategoryController::class,'UpdateCategory'])->name('update.isicategory');
Route::get('/Category/deletes/{id}',[CategoryController::class,'DelCategory']);


Route::get('/CategoryBerita',[CategoryBeritaController::class,'CategoryBerita'])->name('users.categoryberita');
Route::get('/Category/Berita/add',[CategoryBeritaController::class,'AddCategoryBerita'])->name('add.categoryberita');
Route::post('/Category/add/Category/Berita',[CategoryBeritaController::class,'AddIsiCategoryBerita'])->name('add.isicategoryberita');
Route::get('/Category/edit/Category/Berita/{id}',[CategoryBeritaController::class,'EditCategoryBerita'])->name('edit.isicategoryberita');
Route::post('/Category/update/Category/Berita/{id}',[CategoryBeritaController::class,'UpdateCategoryBerita'])->name('update.isicategoryberita');
Route::get('/Category/deletes/Berita/{id}',[CategoryBeritaController::class,'DelCategoryberita']);


Route::get('/Kode_Keluarga',[KodeKeluargaController::class,'Keluarga'])->name('kode.keluarga');
Route::get('/Kode_Keluarga/Add',[KodeKeluargaController::class,'AddKeluarga'])->name('kode.addkeluarga');
Route::post('/Kode_keluarga/add/keluarga',[KodeKeluargaController::class,'AddIsiKeluarga'])->name('kode.isiaddkeluarga');
Route::get('/Kode_keluarga/edit/Keluarga/{kode_keluarga}',[KodeKeluargaController::class,'EditKeluarga'])->name('edit.isikeluarga');
Route::post('/Kode_keluarga/update/Keluarga/{kode_keluarga}',[KodeKeluargaController::class,'UpdateKeluarga'])->name('update.isikeluarga');
Route::get('/Kode_keluarga/deletes/Keluarga/{kode_keluarga}',[KodeKeluargaController::class,'DelKeluarga']);


Route::get('/Meta/Halaman/Desa',[MetaController::class,'Meta'])->name('index.meta');
Route::get('/Meta/Add/Halaman/Desa',[MetaController::class,'AddMeta'])->name('add.meta');
Route::post('/Meta/add/Halaman',[MetaController::class,'AddIsiMeta'])->name('add.isi.meta');
Route::get('/Meta/edit/Halaman/{id}',[MetaController::class,'EditMeta'])->name('edit.isimeta');
Route::post('/Meta/update/Halaman/{id}',[MetaController::class,'UpdateMeta'])->name('update.isimeta');
Route::get('/Meta/deletes/Halaman/{id}',[MetaController::class,'DelMeta']);


Route::get('/Pengumuman',[PengumumanController::class,'Pengumuman'])->name('index.pengumuman');
Route::get('/Pengumuman/Add',[PengumumanController::class,'AddPengumuman'])->name('Add.pengumuman');
Route::post('/Pengumuman/Add/Isi',[PengumumanController::class,'AddIsiPengumuman'])->name('add.isi.pengumuman');
Route::get('/Pengumuman/edit/{id}',[PengumumanController::class,'EditPengumuman'])->name('edit.isipengumuman');
Route::post('/Pengumuman/update/{id}',[PengumumanController::class,'UpdatePengumuman'])->name('update.isipengumuman');
Route::get('/Pengumuman/deletes/{id}',[PengumumanController::class,'DelPengumuman']);
});
Route::get('/user/logout',[PendudukController::class,'Logout'])->name('user.logout');


Route::prefix('/')->group(function () {
    Route::get('/index', [ProfileController::class, 'index'])->name('admin.profile.index');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

});

require __DIR__.'/auth.php';
