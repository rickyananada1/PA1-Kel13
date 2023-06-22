<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Berita;
use App\models\CategoryBerita;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function Berita(){
        $berita = Berita::orderBy('created_at', 'desc')->paginate(5);
        return view('layouts.backend.berita.berita', compact('berita'));
    }
    
    public function AddBerita(){
        $categorys=CategoryBerita::all();
        return View('layouts.backend.berita.add_berita',compact('categorys'));
    }
    public function AddIsiBerita(Request $request)
    {
        $validate = $request->validate([
            'judul_berita' => 'required|unique:berita',
            'brand_image' => 'required|mimes:jpg,jpeg,png',
            'isi_berita' => 'required',
            'category_id'    => 'required',
        ],
        [
            'judul_berita.required' => 'Judul Berita Tidak Boleh Kosong',
            'brand_image.required' => 'Gambar Berita Tidak Boleh Kosong',
            'brand_image.mimes' => 'Gambar Berita harus berupa file JPG, JPEG, atau PNG',
            'judul_berita.max' => 'Judul Berita maximal 50 huruf',
            'isi_berita.required' => 'Isi Berita Tidak Boleh Kosong',
            'category_id.required'    => 'Category Berita Tidak Boleh Kosong',
        ]);
        $brand_image = $request->file('brand_image');

        $nama_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $nama_gen . '.' . $img_ext;
        $up_location = "image/berita/";
        $last_img = $up_location . $img_name;
        
        // Move the uploaded file to the specified location
        $brand_image->move($up_location, $img_name);
    
        Berita::insert([
            'judul_berita' => $request->judul_berita,
            'slug' => STr::slug($request->judul_berita),
            'brand_image' => $last_img,
            'isi_berita' => $request->isi_berita,
            'category_id' =>$request->category_id,
            'created_at' => Carbon::now(),
            'id_user'   =>  Auth::id(),
        ]);
    
        return redirect()->route('users.berita')->with('success', 'Berita Sudah Di Tambah');
    }
    public function EditBerita($id){
        $berita =Berita::where('id', $id)->first();
        $categorys=CategoryBerita::all();
        return view('layouts.backend.berita.edit_berita',compact('berita','categorys'));
    }
    public function UpdateBerita(Request $request, $id)
    {
        $validate = $request->validate([
            'judul_berita' => 'required',
            'brand_image' => 'nullable|mimes:jpg,jpeg,png',
            'isi_berita' => 'required',
            'category_id'    => 'required',
        ],
        [
            'judul_berita.required' => 'Judul Berita Tidak Boleh Kosong',
            'brand_image.mimes' => 'Gambar Berita harus berupa file JPG, JPEG, atau PNG',
            'judul_berita.max' => 'Judul Berita maximal 50 huruf',
            'isi_berita.required' => 'Isi Berita Tidak Boleh Kosong',
            'category_id.required'    => 'Category Berita Tidak Boleh Kosong',
        ]);
    
        $berita = Berita::find($id);
        $old_image = $berita->brand_image;
    
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
    
            $berita->update([
                'judul_berita' => $request->judul_berita,
                'slug' => Str::slug($request->judul_berita),
                'isi_berita' => $request->isi_berita,
                'brand_image' => $last_img,
                'category_id' => $request->category_id,
                'updated_at' => Carbon::now(),
                'id_user' => Auth::id(),
            ]);
        } else {
            $berita->update([
                'judul_berita' => $request->judul_berita,
                'slug' => Str::slug($request->judul_berita),
                'isi_berita' => $request->isi_berita,
                'category_id' => $request->category_id,
                'updated_at' => Carbon::now(),
            ]);
        }
    
        return redirect()->route('users.berita')->with('success', 'Berita Sudah Di Update');
    }
    
    public function DelBerita($id)
    {
        $berita = Berita::find($id);
        $old_image = $berita->brand_image;
    
        if (file_exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
    
        $berita->delete();
    
        return redirect()->back()->with('success', 'Berita sudah berhasil dihapus');
    }
}
