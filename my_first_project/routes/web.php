<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\CategoryController;
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



Route::get('/category/all',[CategoryController::class,'AllCat'])->name('all.category');
Route::post('/category/add',[CategoryController::class,'AddCat'])->name('store.category');
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
Route::get('/Kependudukan',[CategoryController::class,'Kependudukan'])->name('user.kependudukan');
Route::get('/Geografis',[CategoryController::class,'Geografis'])->name('user.geografis');
Route::get('/Sejarah',[CategoryController::class,'Sejarah'])->name('user.sejarah');
Route::get('/Organisasi',[CategoryController::class,'Organisasi'])->name('user.organisasi');
Route::get('/Galeri',[CategoryController::class,'Galeri'])->name('user.galeri');
Route::get('/Kontak',[CategoryController::class,'Kontak'])->name('user.kontak');
Route::get('/Desa',[CategoryController::class,'Desa'])->name('user.desa');
Route::get('/Produk',[CategoryController::class,'Produk'])->name('user.produk');