<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\Kependudukan;
use App\models\KodeKeluarga;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;    

class PendudukController extends Controller
{
    public function Logout(Request $request) {
        Auth::logout();
        return redirect()->route('login');
      }
      public function Penduduk(Request $request)
      {
          $perPage = $request->input('perPage', null); // Mengambil nilai 'perPage' dari URL, defaultnya null
      
          if ($perPage == 0) {
              $kependudukan = Kependudukan::get(); // Mengambil semua data
          } else {
              $kependudukan = Kependudukan::paginate($perPage); // Mengambil jumlah data sesuai 'perPage'
          }
      
          
      
          return view('layouts.backend.penduduk.Kependudukan', compact('kependudukan', 'perPage'));
      }
      

    
    public function AddPenduduk(){
        $kode_keluarga=KodeKeluarga::all();
        return View('layouts.backend.penduduk.add_penduduk',compact('kode_keluarga'));
    }
    public function AddData(Request $request){
        $validate = $request->validate([
            'nama' => 'required|unique:kependudukan',
            'alamat' => 'required',
            'date_of_birth' => 'required|date',
            'agama' => 'required',
            'status' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required|unique:kependudukan',
            'tempat_lahir' => 'required',
            'usia' => 'required|max:3',
            'kode_keluarga' => 'required',
            'golongan_darah'=>'required',
            'hubungan' =>'required'

        ],
        [
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'nama.unique' => 'Nama Sudah Diambil',
            'date_of_birth.required' => 'Tanggal Lahir Tidak Boleh Kosong',
            'nama.max' => 'Maksimum Kata 50',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
            'alamat.max' => 'Maksimum Alamat 100',
            'agama.required'=> 'Agama Tidak Boleh Kosong',
            'status.required'=> 'Status Kawin Tidak Boleh Kosong',
            'jenis_kelamin.required'=> 'Jenis Kelamin Tidak Boleh Kosong',
            'nik.unique'=> 'NIK Sudah Diambil',
            'nik.min'=> 'NIK Harus 16 Angka',
            'usia.required'=> 'Usia Tidak Boleh Kosong',
            'kode_keluarga.required'=> 'Kepala Keluarga Tidak Boleh Kosong',
            'golongan_darah.required'=> 'Golongan Darah Tidak Boleh Kosong',
            'hubungan.required'=> 'Hubungan Tidak Boleh Kosong',
            
        ]);
    
        Kependudukan::insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'date_of_birth' => $request->date_of_birth,
            'agama' => $request->agama,
            'status' => $request->status,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nik' => $request->nik,
            'hubungan' => $request->hubungan,
            'tempat_lahir' => $request->tempat_lahir,
            'usia' => $request->usia,
            'kode_keluarga' => $request->kode_keluarga,
            'golongan_darah'=>$request->golongan_darah,
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('user.penduduk')->with('success', 'Data Penduduk Berhasil Ditambahkan');
    }
    
     public function EditData($nik){
        $categories =Kependudukan::where('nik', $nik)->first();
        $kode_keluarga=KodeKeluarga::all();
        return view('layouts.backend.penduduk.edit',compact('categories','kode_keluarga'));
    }

    public function UpdateData(Request $request,$nik){
        $validate = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'date_of_birth' => 'required|date',
            'agama' => 'required',
            'status' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'usia' => 'required|max:3',
            'kode_keluarga' => 'required',
            'golongan_darah'=>'required',
            'hubungan' =>'required'

        ],
        [
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'date_of_birth.required' => 'Tanggal Lahir Tidak Boleh Kosong',
            'nama.max' => 'Maksimum Kata 50',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
            'alamat.max' => 'Maksimum Alamat 100',
            'agama.required'=> 'Agama Tidak Boleh Kosong',
            'status.required'=> 'Status Kawin Tidak Boleh Kosong',
            'jenis_kelamin.required'=> 'Jenis Kelamin Tidak Boleh Kosong',
            'nik.max'=> 'NIK Harus 16 Angka',
            'nik.min'=> 'NIK Harus 16 Angka',
            'nik.min'=> 'NIK Harus 16 Angka',
            'usia.required'=> 'Usia Tidak Boleh Kosong',
            'kode_keluarga.required'=> 'Kepala Keluarga Tidak Boleh Kosong',
            'golongan_darah.required'=> 'Golongan Darah Tidak Boleh Kosong',
            'hubungan.required'=> 'Hubungan Tidak Boleh Kosong',
            
        ]);
        $data=array();
        $data['nama'] = $request->nama;
        $data['alamat']=$request->alamat;
        $data['date_of_birth']=$request->date_of_birth;
        $data['agama']=$request->agama;
        $data['status']=$request->status;
        $data['jenis_kelamin']=$request->jenis_kelamin;
        $data['nik']=$request->nik;
        $data['hubungan']=$request->hubungan;
        $data['tempat_lahir'] = $request->tempat_lahir;
        $data['usia'] = $request->usia;
        $data['golongan_darah'] = $request->golongan_darah;
        $data['kode_keluarga'] = $request->kode_keluarga;
        $data['updated_at']= Carbon::now();
        DB::table('kependudukan')->where('nik', $nik)->update($data);
        return redirect()->route('user.penduduk')->with('success','Update data penduduk sudah berhasil');
    }

public function DeltPerm($nik){
    $delete = Kependudukan::where('nik', $nik)->Delete();
    return redirect()->back()->with('success',' data sudah berhasil dihapus');
}
}