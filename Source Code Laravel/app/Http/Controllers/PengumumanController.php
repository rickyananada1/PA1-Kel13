<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
  public function Pengumuman(){
    $categoryss=Pengumuman::orderBy('created_at', 'desc')->paginate(5);
    return view('layouts.backend.pengumuman.pengumuman',compact('categoryss'));
  }
  public function AddPengumuman(){
    return view('layouts.backend.pengumuman.add_pengumuman');
  }
  public function AddIsiPengumuman(Request $request){
    $validate = $request->validate([
        'judul' => 'required|unique:pengumuman',
        'isi_pengumuman' => 'required',
    ],
    [
        'judul.required' => 'Judul Pengumuman Tidak Boleh Kosong',
        'isi_pengumuman.required' => 'Deskripsi Pengumuman Tidak Boleh Kosong',
        'judul.unique' => 'Judul Pengumuman Sudah Diambil ',
    ]);

    Pengumuman::insert([
        'judul' => $request->judul,
        'isi_pengumuman' => $request->isi_pengumuman,
        'slug' => STr::slug($request->judul),
        'user_id' => Auth::id(),
        'created_at' => Carbon::now(),
    ]);

    return redirect()->route('index.pengumuman')->with('success', 'Pengumuman Sudah Di Insert');
  }
  public function EditPengumuman($id){
    $pengumuman =Pengumuman::where('id', $id)->first();
    return view('layouts.backend.pengumuman.edit_pengumuman',compact('pengumuman'));
}
public function UpdatePengumuman(Request $request,$id){
    $validate = $request->validate([
        'judul' => 'required',
        'isi_pengumuman' => 'required',
    ],
    [
        'judul.required' => 'Judul Pengumuman Tidak Boleh Kosong',
        'isi_pengumuman.required' => 'Deskripsi Pengumuman Tidak Boleh Kosong',
    ]);

        Pengumuman::find($id)->update([
            'judul' => $request->judul,
            'isi_pengumuman' => $request->isi_pengumuman,
            'slug' => STr::slug($request->judul),
            'user_id' => Auth::id(),
            'updated_at' => Carbon::now(),
        ]);
    
        return redirect()->route('index.pengumuman')->with('success', 'Pengumuman Sudah Di Update');
    }
    public function DelPengumuman($id){
        $pengumuman = Pengumuman::find($id);
        Pengumuman::find($id)->delete();
        return redirect()->back()->with('success',' Pengumuman sudah berhasil dihapus');
}
}
