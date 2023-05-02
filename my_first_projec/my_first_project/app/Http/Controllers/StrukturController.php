<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Struktur;
use Carbon\Carbon;


class StrukturController extends Controller
{
    public function Struktur(){
        $struktur = Struktur::paginate(5);
        return View('layouts.backend.struktur.struktur',compact('struktur'));
    }
    public function AddStruktur(){
        return View('layouts.backend.struktur.add_struktur');
    }
    public function AddIsiStruktur(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|unique:strukturs|max:50',
            'brand_image' => 'required|mimes:jpg,jpeg,png',
            'jabatan' => 'required|max:300',
        ],
        [
            'nama.required' => 'Judul Tidak Boleh Kosong',
            'nama.max' => 'Judul maximal 50 huruf',
            'jabatan.required' => 'Isi Produk Tidak Boleh Kosong',
            'jabatan.max' => 'Isi Produk maximal 300 huruf',
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
    public function UpdateStruktur(Request $request,$id){
        $validate = $request->validate([
            'nama' => 'required|max:50',
            'jabatan' => 'required|max:300',
        
        ],
        [
            'nama.required' => 'Judul Tidak Boleh Kosong',
            'nama.max' => 'Judul maximal 50 huruf',
            'jabatan.required' => 'jabatan Tidak Boleh Kosong',
            'jabatan.max' => 'jabatan maximal 300 huruf',
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
            Struktur::find($id)->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'brand_image' => $last_img,
                'updated_at' => Carbon::now(),
            ]);
        
            return redirect()->route('users.struktur')->with('success', 'Gambar Sudah Di Update');
        }else{
            Struktur::find($id)->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'updated_at' => Carbon::now(),
            ]);
        
            return redirect()->route('users.struktur')->with('success', 'Gambar Sudah Di Update');
        }

      
    }
    public function DelStruktur($id){
        $image = Struktur::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);

        Struktur::find($id)->delete();
        return redirect()->back()->with('success',' data sudah berhasil dihapus');
}
}
