<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Struktur;
use Carbon\Carbon;


class StrukturController extends Controller
{
    public function Struktur(){
        $struktur = Struktur::orderBy('created_at', 'desc')->paginate(5);
        return View('layouts.backend.struktur.struktur',compact('struktur'));
    }
    public function AddStruktur(){
        return View('layouts.backend.struktur.add_struktur');
    }
    public function AddIsiStruktur(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|unique:struktur',
            'brand_image' => 'required|mimes:jpg,jpeg,png',
            'jabatan' => 'required|max:300',
        ],
        [
            'nama.required' => 'Nama Anggota Tidak Boleh Kosong',
            'nama.max' => 'Nama Anggota maximal 50 huruf',
            'brand_image.required' => 'Foto Anggota tidak boleh kosong',
            'jabatan.required' => 'Jabatan Tidak Boleh Kosong',
            'jabatan.max' => 'Jabatan maximal 300 huruf',
        ]);
        $brand_image = $request->file('brand_image');

        $nama_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $nama_gen . '.' . $img_ext;
        $up_location = "image/produk/";
        $last_img = $up_location . $img_name;
        
        // Move the uploaded file to the specified location
        $brand_image->move($up_location, $img_name);
    
        Struktur::insert([
            'nama' => $request->nama,
            'brand_image' => $last_img,
            'jabatan' => $request->jabatan,
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('users.struktur')->with('success', 'Gambar Sudah Di Insert');
    }
    public function EditStruktur($id){
        $struktur =Struktur::where('id', $id)->first();
        return view('layouts.backend.struktur.edit_struktur',compact('struktur'));
    }
    public function UpdateStruktur(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required|max:300',
        ],
        [
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'nama.max' => 'Nama maximal 50 huruf',
            'jabatan.required' => 'Jabatan Tidak Boleh Kosong',
            'jabatan.max' => 'Jabatan maximal 300 huruf',
        ]);
    
        $struktur = Struktur::find($id);
        $old_image = $struktur->brand_image;
    
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
    
            $struktur->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'brand_image' => $last_img,
                'updated_at' => Carbon::now(),
            ]);
        } else {
            $struktur->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'updated_at' => Carbon::now(),
            ]);
        }
    
        return redirect()->route('users.struktur')->with('success', 'Data Sudah Di Update');
    }
    public function DelStruktur($id)
    {
        $berita = Struktur::find($id);
        $old_image = $berita->brand_image;
        
        if (file_exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
    
        $berita->delete();
    
        return redirect()->back()->with('success', 'Berita sudah berhasil dihapus');
    }
}
