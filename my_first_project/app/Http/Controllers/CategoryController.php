<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\models\Category;
use Carbon\Carbon;


class CategoryController extends Controller
{
    public function AllCat(){
        $categories=DB::table('categories')->latest()->paginate(5);
        return View('layouts.backend.category',compact('categories'));
    }
    public function AddCat(Request $request){
       $validate = $request->validate([
        'category_name'=>'required|unique:categories|max:255',
       ],
    [
        'category_name.required'=>'Nama Kategori Tidak Boleh Kosong',
        'category_name.max'=>'Maksimum Kata 255'
    ]);
    $data=array();
    $data['category_name']=$request->category_name;
    $data['user_id']=Auth::user()->id;
    DB::table('categories')->insert($data);

    return redirect()->back()->with('success','Category Sudah Di Insert');
    }
    public function Logout(){
        Auth::logout();

    return redirect()->route('login');
    }

    public function Berita(){
        return View('layouts.frontend.berita');
    }
    public function Darah(){
        return View('layouts.frontend.data_jenisdarah');
    }
    public function Kelamin(){
        return View('layouts.frontend.data_jeniskelamin');
    }
    public function Pekerjaan(){
        return View('layouts.frontend.data_jenispekerjaan');
    }
    public function Kependudukan(){
        return View('layouts.frontend.data_kependudukan');
    }
    public function Geografis(){
        return View('layouts.frontend.desa_geografis');
    }
    public function Sejarah(){
        return View('layouts.frontend.desa_sejarah');
    }
    public function Organisasi(){
        return View('layouts.frontend.desa_organisasi');
    }
    public function Galeri(){
        return View('layouts.frontend.galeri');
    }
    public function Kontak(){
        return View('layouts.frontend.kontak');
    }
    public function Desa(){
        return View('layouts.frontend.index');
    }
    public function Produk(){
        return View('layouts.frontend.produk');
    }
}
