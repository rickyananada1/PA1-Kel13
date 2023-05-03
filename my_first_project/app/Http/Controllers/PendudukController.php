<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\Kependudukan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;    

class PendudukController extends Controller
{
    public function Logout(Request $request) {
        Auth::logout();
        return redirect()->route('login');
      }
    public function Penduduk(){
        $kependudukan = Kependudukan::paginate(5);
        $trashCat = Kependudukan::onlyTrashed()->latest()->paginate(5);
        return View('layouts.backend.penduduk.Kependudukan',compact('kependudukan','trashCat'));
    }
    public function AddPenduduk(){
        return View('layouts.backend.penduduk.add_penduduk');
    }
    public function Delpenduduk(){
        $trashCat = Kependudukan::onlyTrashed()->latest()->paginate(5);
        return View('layouts.backend.penduduk.del_penduduk',compact('trashCat'));
    }
    public function AddData(Request $request){
        $validate = $request->validate([
         'nama'=>'required|unique:kependudukans|max:50',
         'alamat'=>'required|unique:kependudukans|max:50',
         'date_of_birth' => 'required|date',
         'agama' => 'required',
         'status' => 'required'
        ],
     [
         'nama.required'=>'Nama Tidak Boleh Kosong',
         'date_of_birth.required' => 'Tanggal Lahir Tidak Boleh Kosong',
         'nama.max'=>'Maksimum Kata 50',
         'alamat.required'=>'Alamat Tidak Boleh Kosong',
         'alamat.max'=>'Maksimum Alamat 100'
     ]);
     Kependudukan::insert([
     'nama' => $request->nama,
     'alamat'=>$request->alamat,
     'date_of_birth'=>$request->date_of_birth,
     'agama'=>$request->agama,
     'status'=>$request->status,
     'created_at' =>Carbon::now(),
     ]);
     return redirect()->route('user.penduduk')->with('success','Category Sudah Di Insert');
     }
     public function EditData($id_kependudukan){
        $categories =Kependudukan::where('id_kependudukan', $id_kependudukan)->first();
        return view('layouts.backend.penduduk.edit',compact('categories'));
    }

    public function UpdateData(Request $request,$id_kependudukan){
        $data=array();
        $data['nama'] = $request->nama;
        $data['alamat']=$request->alamat;
        $data['date_of_birth']=$request->date_of_birth;
        $data['agama']=$request->agama;
        $data['status']=$request->status;
        $data['updated_at']= Carbon::now();
        DB::table('kependudukans')->where('id_kependudukan', $id_kependudukan)->update($data);
        return redirect()->route('user.penduduk')->with('success','Update data sudah berhasil');
    }
    public function SoftDelete($id_kependudukan){
        $delete =   DB::table('kependudukans')->where('id_kependudukan', $id_kependudukan)->update(['deleted_at' => Carbon::now()]);
        return redirect()->back()->with('success',' data sudah berhasil dihapus');
}   
    public function Restore($id_kependudukan){
    $restote = DB::table('kependudukans')
    ->where('id_kependudukan', $id_kependudukan)
    ->update(['deleted_at' => null]);
    return redirect()->back()->with('success',' data sudah berhasil dikembalikan');
}

public function DeltPerm($id_kependudukan){
    $delete = Kependudukan::where('id_kependudukan', $id_kependudukan)->forceDelete();
    return redirect()->back()->with('success',' data sudah berhasil dihapus');
}
}
