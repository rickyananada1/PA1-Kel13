<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Galeri;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function AllGaleri(){
        $galeri = Galeri::paginate(5);
        return View('layouts.backend.galeri.galeri',compact('galeri'));
    }
    public function AddGaleri(){
        return View('layouts.backend.galeri.add_galeri');
    }
    public function AddGambar(Request $request)
    {
        $validate = $request->validate([
            'judul_galeri' => 'required|unique:galeris|max:50',
            'brand_image' => 'required|mimes:jpg,jpeg,png',
            'deskripsi' => 'required|max:300',
        ],
        [
            'judul_galeri.required' => 'Judul Tidak Boleh Kosong',
            'judul_galeri.max' => 'Judul maximal 50 huruf',
            'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
            'deskripsi.max' => 'Deskripsi maximal 300 huruf',
        ]);
        $brand_image = $request->file('brand_image');

        $nama_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $nama_gen . '.' . $img_ext;
        $up_location = "image/brand/";
        $last_img = $up_location . $img_name;
        
        // Move the uploaded file to the specified location
        $brand_image->move($up_location, $img_name);
    
        Galeri::insert([
            'judul_galeri' => $request->judul_galeri,
            'brand_image' => $last_img,
            'deskripsi' => $request->deskripsi,
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('users.galeri')->with('success', 'Gambar Sudah Di Insert');
    }
    public function EditGaleri($id){
        $galeri =Galeri::where('id', $id)->first();
        return view('layouts.backend.galeri.edit_galeri',compact('galeri'));
    }
    public function UpdateGaleri(Request $request,$id){
        $validate = $request->validate([
            'judul_galeri' => 'required|max:50',
            'deskripsi' => 'required|max:300',
        
        ],
        [
            'judul_galeri.required' => 'Judul Tidak Boleh Kosong',
            'judul_galeri.max' => 'Judul maximal 50 huruf',
            'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
            'deskripsi.max' => 'Deskripsi maximal 300 huruf',
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
            Galeri::find($id)->update([
                'judul_galeri' => $request->judul_galeri,
                'deskripsi' => $request->deskripsi,
                'brand_image' => $last_img,
                'updated_at' => Carbon::now(),
            ]);
        
            return redirect()->route('users.galeri')->with('success', 'Gambar Sudah Di Update');
        }else{
            Galeri::find($id)->update([
                'judul_galeri' => $request->judul_galeri,
                'deskripsi' => $request->deskripsi,
                'updated_at' => Carbon::now(),
            ]);
        
            return redirect()->route('users.galeri')->with('success', 'Gambar Sudah Di Update');
        }

      
    }
    public function DelGaleri($id){
        $image = Galeri::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);

        Galeri::find($id)->delete();
        return redirect()->back()->with('success',' data sudah berhasil dihapus');
}
}