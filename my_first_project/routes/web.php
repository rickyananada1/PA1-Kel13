<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\GaleriController;
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
});

Route::get('/user/logout',[CategoryController::class,'Logout'])->name('user.logout');
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
