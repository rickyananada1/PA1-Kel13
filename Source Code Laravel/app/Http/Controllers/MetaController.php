<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Meta;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MetaController extends Controller
{
    public function Meta(){
        $meta = Meta::orderBy('created_at', 'desc')->paginate(5);
        return View('layouts.backend.meta.meta',compact('meta'));
    }
    public function AddMeta(){
        return View('layouts.backend.meta.add_meta');
    }
    public function AddIsiMeta(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required|unique:meta',
            'deskripsi' => 'required',
        ],
        [
            'judul.required' => 'Judul Tidak Boleh Kosong',
            'judul.max' => 'Judul  maximal 50 huruf',
            'deskripsi.required' => 'Isi Halaman Tidak Boleh Kosong',
        ]);
    
       Meta::insert([
            'judul' => $request->judul,
            'meta_name' => STr::slug($request->judul),
            'created_at' => Carbon::now(),
            'deskripsi' => $request->deskripsi,
        ]);
    
        return redirect()->route('index.meta')->with('success', 'Halaman Baru Sudah Di Tambah');
    }
    public function EditMeta($id){
        $meta = Meta::where('id', $id)->first();
        return view('layouts.backend.meta.edit_meta',compact('meta'));
    }
    public function UpdateMeta(Request $request, $id)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
          
        ],
        [
            'judul.required' => 'Judul Tidak Boleh Kosong',
            'judul.max' => 'Judul  maximal 50 huruf',
            'deskripsi.required' => 'Isi Halaman Tidak Boleh Kosong',
        ]);
    
        $meta = Meta::find($id); 
            $meta->update([
                'judul' => $request->judul,
                'meta_name' => STr::slug($request->judul),
                'updated_at' => Carbon::now(),
                'deskripsi' => $request->deskripsi,
            ]);
        return redirect()->route('index.meta')->with('success', 'Halaman Sudah Di Update');
    }
    
    public function DelMeta($id){
        $meta = Meta::find($id);
        Meta::find($id)->delete();
        return redirect()->back()->with('success',' Halaman sudah berhasil dihapus');
}
}
