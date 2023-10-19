<?php
namespace App\Http\Controllers\Superadmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use auth;
use App\Models\Karyawan;
use App\Models\User;


class SuperadminController extends Controller
{

    public function index(){
          $cuti=DB::table('table_cuti')->count();
          $pic=DB::table('table_pic')->count();
          $karyawan=DB::table('table_karyawan')->count();
          $pengajuan=DB::table('table_cuti')
          ->join('table_karyawan', 'table_cuti.id_user', '=', 'table_karyawan.id_user')
          ->select('table_karyawan.nama', 'table_karyawan.jabatan', 'table_cuti.awal_cuti', 'table_cuti.akhir_cuti')
          ->latest('table_cuti.created_at')
          ->limit(5)
          ->get();
          $kar=DB::table('table_karyawan')->latest('created_at')->select('table_karyawan.nama', 'table_karyawan.jabatan')->limit(5)->get();
          // $client=DB::table('table_client')->latest('created_at')->select('table_client.nama_client', 'table_client.domisili')->limit(4)->get();
          // $order=DB::table('table_order')->latest('updated_at')->select('table_order.status_payment')->limit(50)->get();
          
        return view('Superadmin.dashboard.index', compact('cuti', 'pic', 'karyawan', 'pengajuan', 'kar'));
    }

    public function profil(){

          $id=Auth()->id();    
          $user=Karyawan::where('id_user', $id)->first();
          $email=User::where('id', $id)->pluck('email');
          if($user != null){ 
          $profil = DB::table('table_karyawan')
          ->where('table_karyawan.id_user', '=', $id)
          ->select('table_karyawan.id_user','table_karyawan.nama', 'table_karyawan.alamat', 'table_karyawan.jabatan', 'table_karyawan.no_telp')
          ->get();
          return view('Karyawan.profil.index', compact('profil', 'user', 'email'));
          }
          else{
               $profil = DB::table('table_karyawan')
          ->where('table_karyawan.id_user', '=', null)
          ->select('table_karyawan.id_user', 'table_karyawan.nama', 'table_karyawan.alamat', 'table_karyawan.jabatan', 'table_karyawan.no_telp')
          ->get();
          return view('Karyawan.profil.index', compact('profil', 'user'));
          }
    }

     public function create()
     {
          $create = Karyawan::all();
          return view('Karyawan.profil.create', compact('create'));
     }

     public function store(Request $request)
     {
          $this->validate($request, [
               'nama' => 'required',
               'alamat'  => 'required',
               'jabatan'  => 'required',
               'no_telp'  => 'required',
               ]);
               $create = new Karyawan;
               $user = auth()->id();
               $create->id_user = $user;
               $create->nama = $request->nama;
               $create->alamat = $request->alamat;
               $create->jabatan = $request->jabatan;
               $create->no_telp = $request->no_telp;
               $create->save();
               return redirect('/karyawan/profil')->with('msg','Data Berhasil di Simpan');
     }
     public function edit($id)
     {
          $karyawan = Karyawan::where('id_user',$id)->first();
          return view('Karyawan.profil.update',compact('karyawan'));
     }

     public function update(Request $request,$id)
     {
          $karyawan = Karyawan::where('id_user',$id)->first();
          $karyawan->nama = $request->nama;
          $karyawan->alamat = $request->alamat;
          $karyawan->jabatan = $request->jabatan;
          $karyawan->no_telp = $request->no_telp;
          $karyawan->save();
          return redirect('/karyawan/profil')->with('msg','Data Berhasil di Simpan');
     }

public function destroy($id)
     {
          $client = Client::find($id);
          $client->delete();
          return redirect('client.profil.profil')->with('msg','Data Berhasil di Hapus');
     }
 }
