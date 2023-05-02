<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Berita;
use Carbon\Carbon;

class BeritaController extends Controller
{
    public function Berita(){
        $berita = Berita::paginate(5);
        return View('layouts.backend.berita.berita',compact('berita'));
    }
    public function AddBerita(){
        return View('layouts.backend.berita.add_berita');
    }
    public function AddIsiBerita(Request $request)
    {
        $validate = $request->validate([
            'judul_berita' => 'required|unique:beritas|max:50',
            'brand_image' => 'required|mimes:jpg,jpeg,png',
            'isi_berita' => 'required|max:300',
        ],
        [
            'judul_berita.required' => 'Judul Tidak Boleh Kosong',
            'judul_berita.max' => 'Judul maximal 50 huruf',
            'isi_berita.required' => 'Isi Berita Tidak Boleh Kosong',
            'isi_berita.max' => 'Isi Berita maximal 300 huruf',
        ]);
        $brand_image = $request->file('brand_image');

        $nama_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $nama_gen . '.' . $img_ext;
        $up_location = "image/brand/";
        $last_img = $up_location . $img_name;
        
        // Move the uploaded file to the specified location
        $brand_image->move($up_location, $img_name);
    
        Berita::insert([
            'judul_berita' => $request->judul_berita,
            'brand_image' => $last_img,
            'isi_berita' => $request->isi_berita,
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('users.berita')->with('success', 'Gambar Sudah Di Insert');
    }
    public function EditBerita($id){
        $berita =Berita::where('id', $id)->first();
        return view('layouts.backend.berita.edit_berita',compact('berita'));
    }
    public function UpdateBerita(Request $request,$id){
        $validate = $request->validate([
            'judul_berita' => 'required|max:50',
            'isi_berita' => 'required|max:300',
        ],
        [
            'judul_berita.required' => 'Judul Tidak Boleh Kosong',
            'judul_berita.max' => 'Judul maximal 50 huruf',
            'isi_berita.required' => 'Isi Berita Tidak Boleh Kosong',
            'isi_berita.max' => 'Isi Berita maximal 300 huruf',
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
            Berita::find($id)->update([
                'judul_berita' => $request->judul_berita,
                'isi_berita' => $request->isi_berita,
                'brand_image' => $last_img,
                'updated_at' => Carbon::now(),
            ]);
        
            return redirect()->route('users.berita')->with('success', 'Gambar Sudah Di Update');
        }else{
            Berita::find($id)->update([
                'judul_berita' => $request->judul_berita,
                'isi_berita' => $request->isi_berita,
                'updated_at' => Carbon::now(),
            ]);
        
            return redirect()->route('users.berita')->with('success', 'Gambar Sudah Di Update');
        }

      
    }
    public function DelBerita($id){
        $image = Berita::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);

        Berita::find($id)->delete();
        return redirect()->back()->with('success',' data sudah berhasil dihapus');
}
}
