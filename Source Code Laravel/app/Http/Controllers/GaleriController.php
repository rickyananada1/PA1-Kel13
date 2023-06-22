<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Galeri;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function AllGaleri(){
        $galeri = Galeri::orderBy('created_at', 'desc')->paginate(5);
        return View('layouts.backend.galeri.galeri',compact('galeri'));
    }
    public function AddGaleri(){
        return View('layouts.backend.galeri.add_galeri');
    }
    public function AddGambar(Request $request)
    {
        $validate = $request->validate([
            'judul_galeri' => 'required|unique:galeri',
            'brand_image.*' => 'required|mimes:jpg,jpeg,png',
        ],
        [
            'judul_galeri.required' => 'Judul Galeri Tidak Boleh Kosong',
            'judul_galeri.max' => 'Judul Galeri maximal 50 huruf',
        ]);
    
        $brand_images = $request->file('brand_image');
        $images = array();
    
        foreach($brand_images as $brand_image){
            $nama_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $nama_gen . '.' . $img_ext;
            $up_location = "image/brand/";
            $last_img = $up_location . $img_name;
    
            // Move the uploaded file to the specified location
            $brand_image->move($up_location, $img_name);
    
            $images[] = $last_img;
        }
    
        Galeri::insert([
            'judul_galeri' => $request->judul_galeri,
            'slug' => $request->judul_galeri,
            'brand_image' => json_encode($images),
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('users.galeri')->with('success', 'Data Galeri Sudah Di Insert');
    }
    
    public function EditGaleri($id){
        $galeri =Galeri::where('id', $id)->first();
        return view('layouts.backend.galeri.edit_galeri',compact('galeri'));
    }
    public function UpdateGaleri(Request $request, $id)
    {
        $validate = $request->validate([
            'judul_galeri' => 'required',
            'brand_image.*' => 'nullable|mimes:jpg,jpeg,png'
        ], [
            'judul_galeri.required' => 'Judul Tidak Boleh Kosong',
            'judul_galeri.max' => 'Judul maximal 50 huruf',
            'brand_image.*.mimes' => 'Gambar harus berupa file JPG, JPEG atau PNG'
        ]);
    
        $galeri = Galeri::find($id);
        $old_images = json_decode($galeri->brand_image);
    
        $images = [];
        if ($request->hasFile('brand_image')) {
            foreach ($request->file('brand_image') as $brand_image) {
                $nama_gen = hexdec(uniqid());
                $img_ext = strtolower($brand_image->getClientOriginalExtension());
                $img_name = $nama_gen . '.' . $img_ext;
                $up_location = "image/brand/";
                $last_img = $up_location . $img_name;
    
                // Move the uploaded file to the specified location
                $brand_image->move($up_location, $img_name);
    
                $images[] = $last_img;
            }
        } else {
            // Jika tidak ada gambar baru yang diunggah, gunakan gambar-gambar yang ada sebelumnya
            $images = $old_images;
        }
    
        $galeri->update([
            'judul_galeri' => $request->judul_galeri,
            'slug' => $request->judul_galeri,
            'brand_image' => json_encode($images),
            'updated_at' => Carbon::now(),
        ]);
    
        foreach ($old_images as $old_image) {
            if (!in_array($old_image, $images)) {
                unlink(public_path($old_image));
            }
        }
    
        return redirect()->route('users.galeri')->with('success', 'Data Galeri Sudah Di Update');
    }
    

public function DelGaleri($id)
{
    $image = Galeri::find($id);
    $old_images = json_decode($image->brand_image, true);

    foreach ($old_images as $old_image) {
        if (file_exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
    }

    Galeri::find($id)->delete();
    return redirect()->back()->with('success', 'Data Galeri sudah berhasil dihapus');
}

}