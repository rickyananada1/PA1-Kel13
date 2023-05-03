<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Produk;
use Carbon\Carbon;

class ProdukController extends Controller
{
    public function Produk(){
        $produk = Produk::paginate(5);
        return View('layouts.backend.produk.produk',compact('produk'));
    }
    public function AddProduk(){
        return View('layouts.backend.produk.add_produk');
    }
    public function AddIsiProduk(Request $request)
    {
        $validate = $request->validate([
            'judul_produk' => 'required|unique:produks|max:50',
            'brand_image' => 'required|mimes:jpg,jpeg,png',
            'isi_produk' => 'required|max:300',
        ],
        [
            'judul_produk.required' => 'Judul Tidak Boleh Kosong',
            'judul_produk.max' => 'Judul maximal 50 huruf',
            'isi_produk.required' => 'Isi Produk Tidak Boleh Kosong',
            'isi_produk.max' => 'Isi Produk maximal 300 huruf',
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
            'brand_image' => $last_img,
            'isi_produk' => $request->isi_produk,
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('users.produk')->with('success', 'Gambar Sudah Di Insert');
    }
    public function EditProduk($id){
        $produk =Produk::where('id', $id)->first();
        return view('layouts.backend.produk.edit_produk',compact('produk'));
    }
    public function UpdateProduk(Request $request,$id){
        $validate = $request->validate([
            'judul_produk' => 'required|max:50',
            'isi_produk' => 'required|max:300',
        ],
        [
            'judul_produk.required' => 'Judul Tidak Boleh Kosong',
            'judul_produk.max' => 'Judul maximal 50 huruf',
            'isi_produk.required' => 'Isi produk Tidak Boleh Kosong',
            'isi_produk.max' => 'Isi produk maximal 300 huruf',
        ]);
        $old_image=$request->old_image;
        $brand_image = $request->file('brand_image');

        if($brand_image){
            $nama_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $nama_gen . '.' . $img_ext;
            $up_location = "image/brand/";
            $last_img = $up_location . $img_name;
            $brand_image->move($up_location, $img_name);
        
            unlink($old_image);
            Produk::find($id)->update([
                'judul_produk' => $request->judul_produk,
                'isi_produk' => $request->isi_produk,
                'brand_image' => $last_img,
                'updated_at' => Carbon::now(),
            ]);
        
            return redirect()->route('users.produk')->with('success', 'Gambar Sudah Di Update');
        }else{
            Produk::find($id)->update([
                'judul_produk' => $request->judul_produk,
                'isi_produk' => $request->isi_produk,
                'updated_at' => Carbon::now(),
            ]);
        
            return redirect()->route('users.produk')->with('success', 'Gambar Sudah Di Update');
        }

      
    }
    public function DelProduk($id){
        $image = Produk::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);

        Produk::find($id)->delete();
        return redirect()->back()->with('success',' data sudah berhasil dihapus');
}
}
