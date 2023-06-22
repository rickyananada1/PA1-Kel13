<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Produk;
use App\models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    public function Produk(){
        $produk = Produk::orderBy('created_at', 'desc')->paginate(5);
        return View('layouts.backend.produk.produk',compact('produk'));
    }
    public function AddProduk(){
        $category=Category::all();
        return View('layouts.backend.produk.add_produk',compact('category'));
    }
    public function AddIsiProduk(Request $request)
    {
        $validate = $request->validate([
            'judul_produk' => 'required|unique:produk',
            'brand_image' => 'required|mimes:jpg,jpeg,png',
            'isi_produk' => 'required',
            'category_id'    => 'required',
        ],
        [
            'judul_produk.required' => 'Judul Produk Tidak Boleh Kosong',
            'judul_produk.max' => 'Judul Produk maximal 50 huruf',
            'isi_produk.required' => 'Isi Produk Tidak Boleh Kosong',
            'brand_image.required' => 'Gambar Produk Tidak Boleh Kosong',
            'brand_image.mimes' => 'Gambar Produk harus berupa file JPG, JPEG, atau PNG',
            'category_id.required' => ' Category Produk Tidak Boleh Kosong',
        ]);
        $brand_image = $request->file('brand_image');

        $nama_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $nama_gen . '.' . $img_ext;
        $up_location = "image/brand/";
        $last_img = $up_location . $img_name;
        
        // Move the uploaded file to the specified location
        $brand_image->move($up_location, $img_name);
    
        Produk::insert([
            'judul_produk' => $request->judul_produk,
            'slug' => STr::slug($request->judul_produk),
            'brand_image' => $last_img,
            'isi_produk' => $request->isi_produk,
            'category_id' =>$request->category_id,
            'id_user'   =>  Auth::id(),
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('users.produk')->with('success', 'Gambar Sudah Di Insert');
    }
    public function EditProduk($id){
        $produk =Produk::where('id', $id)->first();
        $category=Category::all();
        return view('layouts.backend.produk.edit_produk',compact('produk','category'));
    }
    public function UpdateProduk(Request $request,$id){
        $validate = $request->validate([
            'judul_produk' => 'required',
            'isi_produk' => 'required',
            'category_id'    => 'required',
        ],
        [
            'judul_produk.required' => 'Judul Tidak Boleh Kosong',
            'judul_produk.max' => 'Judul maximal 50 huruf',
            'isi_produk.required' => 'Isi produk Tidak Boleh Kosong',
    
        ]);
        $old_image=$request->old_image;
        $brand_image = $request->file('brand_image');

        if ($request->hasFile('brand_image')) {
            if (file_exists(public_path($old_image))) {
                unlink(public_path($old_image));
            }
    
            $brand_image = $request->file('brand_image');
            $nama_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $nama_gen . '.' . $img_ext;
            $up_location = "image/brand/";
            $last_img = $up_location . $img_name;
            $brand_image->move($up_location, $img_name);
            Produk::find($id)->update([
                'judul_produk' => $request->judul_produk,
                'slug' => STr::slug($request->judul_produk),
                'isi_produk' => $request->isi_produk,
                'brand_image' => $last_img,
                'category_id' =>$request->category_id,
                'updated_at' => Carbon::now(),
            ]);
        
            return redirect()->route('users.produk')->with('success', 'Gambar Sudah Di Update');
        }else{
            Produk::find($id)->update([
                'judul_produk' => $request->judul_produk,
                'isi_produk' => $request->isi_produk,
                'category_id' =>$request->category_id,
                'slug' => STr::slug($request->judul_produk),
                'updated_at' => Carbon::now(),
            ]);
        
            return redirect()->route('users.produk')->with('success', 'Gambar Sudah Di Update');
        }

      
    }
    public function DelProduk($id)
    {
        $berita = Produk::find($id);
        $old_image = $berita->brand_image;
    
        if (file_exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
    
        $berita->delete();
    
        return redirect()->back()->with('success', 'Berita sudah berhasil dihapus');
    }
}
