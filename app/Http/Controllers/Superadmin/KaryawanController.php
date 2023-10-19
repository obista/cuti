<?php
namespace App\Http\Controllers\Superadmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use App\Models\Karyawan;
use App\Models\Cuti;


class KaryawanController extends Controller
{

    public function index(){
        $kar=Karyawan::all();
        return view('Superadmin.karyawan.index', compact('kar'));
    }
    public function edit($id)
    {
     $kar = Karyawan::where('id',$id)->first();
     return view('Superadmin.karyawan.edit',compact('kar'));
    }

    public function update(Request $request,$id)
    {
          $kar = Karyawan::where('id',$id)->first();
          $kar->nama = $request->nama;
          $kar->alamat = $request->alamat;
          $kar->jabatan = $request->jabatan;
          $kar->no_telp = $request->no_telp;
          $kar->save();
          return redirect('/superadmin/karyawan')->with('msg','Data Berhasil di Simpan');
    }
    public function destroy($id)
     {
          $cuti = Karyawan::find($id);
          $cuti->delete();
          return redirect('/superadmin/karyawan')->with('msg','Data Berhasil di Hapus');
     }
}