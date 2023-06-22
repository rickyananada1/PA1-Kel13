<?php

namespace App\Http\Controllers;

use App\Models\KodeKeluarga;
use Illuminate\Http\Request;
use Carbon\Carbon;

class KodeKeluargaController extends Controller
{
    public function Keluarga(){
        $kodekeluarga = KodeKeluarga::orderBy('created_at', 'desc')->paginate(5);
        return View('layouts.backend.keluarga.keluarga',compact('kodekeluarga'));
    }
    public function AddKeluarga(){
        $kodekeluarga = KodeKeluarga::paginate(5);
        return View('layouts.backend.keluarga.add_keluarga',compact('kodekeluarga'));
    }
    public function AddIsiKeluarga(Request $request)
    {
        $validate = $request->validate([
            'kode_keluarga' => 'required|unique:kode_keluargas',
            'nama_kepala_keluarga' => 'required|unique:kode_keluargas',
        ],
        [
            'nama_kepala_keluarga.required' => 'Nama Kepala Keluarga Tidak Boleh Kosong',
            'nama_kepala_keluarga.max' => 'Batas nama 50 huruf',
            'kode_keluarga.min' => 'Masukkan NIK yang sesuai',
            'kode_keluarga.max' => 'Masukkan NIK yang sesuai',
            'kode_keluarga.required' => 'NIK Kepala Keluarga Tidak Boleh Kosong',
            'nama_kepala_keluarga.unique' => 'Nama Sudah Diambil',
            'kode_keluarga.unique' => 'NIK Kepala Keluarga Sudah Diambil'
        ]);
    
        KodeKeluarga::insert([
            'kode_keluarga' => $request->kode_keluarga,
            'nama_kepala_keluarga' => $request->nama_kepala_keluarga,
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('kode.keluarga')->with('success', 'Kode Keluarga sudah ditambahkan');
    }
    public function EditKeluarga($kode_keluarga){
        $category =KodeKeluarga::where('kode_keluarga', $kode_keluarga)->first();
        return view('layouts.backend.keluarga.edit_keluarga',compact('category'));
    }
    public function UpdateKeluarga(Request $request,$kode_keluarga){
        $validate = $request->validate([
            'kode_keluarga' => 'required',
            'nama_kepala_keluarga' => 'required',
        ],
        [
            'nama_kepala_keluarga.required' => 'Nama Kepala Keluarga Tidak Boleh Kosong',
            'nama_kepala_keluarga.max' => 'Batas nama 50 huruf',
            'kode_keluarga.min' => 'Masukkan NIK yang sesuai',
            'kode_keluarga.max' => 'Masukkan NIK yang sesuai',
            'kode_keluarga.required' => 'NIK Kepala Keluarga Tidak Boleh Kosong',
            'nama_kepala_keluarga.unique' => 'Nama Sudah Diambil',
            'kode_keluarga.unique' => 'NIK Kepala Keluarga Sudah Diambil'
        ]);
    

            KodeKeluarga::where('kode_keluarga', $kode_keluarga)->update([
                'kode_keluarga' => $request->kode_keluarga,
                'nama_kepala_keluarga' => $request->nama_kepala_keluarga,
                'updated_at' => Carbon::now(),
            ]);
        
            return redirect()->route('kode.keluarga')->with('success', 'Kode Keluarga sudah diupdate');
        }

      
    
    public function DelKeluarga($kode_keluarga){
        $image = KodeKeluarga::where('kode_keluarga', $kode_keluarga);
        KodeKeluarga::where('kode_keluarga', $kode_keluarga)->delete();
        return redirect()->back()->with('success',' Kode Keluarga sudah dihapus');
}
}
