<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// database menggunakan query builder
use Illuminate\Support\Facades\DB;

class ControllerAdmin extends Controller
{
    public function tesnamaurl($tesnamaurl){
        return $tesnamaurl;
    }

    // fungsi parameter untuk mengankap data dari url
    public function iniindex($nama)
    {
        return $nama;
    }

    // public function index(){
    //     return view('TamplateAdmin',
    // // data passing
    //         [ 
    //             'Dashboard' => 'Ini Dashboard',
    //             'DataMahasiswa' => 'ini data mahasiswa',
    //             'DataDosen' => 'Ini data dosen',
    //             'DataTU' => 'Ini data TU',
    //             'DataOB' => 'Ini data OB'
    //         ]
    //     );
    // }

    public function indexberandaadmin()
    {
        return view('TamplateAdminBeranda');
    }

    public function indexdekan(){
        // mengambil data dari table pegawai
        $dekan = DB::table('data_dekan')->get();

        // mengirim data pegawai ke view TamplateDekan
        return view('TamplateDekan',['data_dekan' => $dekan]);
    }

    // masiih jadi PR        
    public function prosesinputdekan(Request $request){
        $nama = $request->input('nama');
        $jabatan = $request->input('jabatan');
        $dekanjurusan = $request->input('dekanjurusan');
        $umur = $request->input('umur');
        $alamat = $request->input('alamat');

        return view('TamplateDekan')->with("Nama : ".$nama.", Alamat : ".$alamat);
    }

    public function indexdosen() {
        $dosen = DB::table('data_dosen')->get();

        return view('TamplateDosen',['data_dosen' => $dosen]);
    }    

    public function prosesinputdosen(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        
        return "Nama : ".$nama.", Alamat : ".$alamat; 
    }

    public function indexmahasiswa() {
        $mahasiswa = DB::table('data_mahasiswa')->get();

        return view('TamplateMahasiswa',['data_mahasiswa' => $mahasiswa]);
    }

    public function prosesinputmhs(Request $request){
        $nama    = $request->input('nama');
        $kelas   = $request->input('kelas');
        $alamat  = $request->input('alamat');
        $jurusan = $request->input('jurusan');

        return "Nama : ".$nama.", Kelas : ".$kelas." Alamat : ".$alamat.", Jurusan : ".$jurusan;
    }

    public function indexTU(){
        $TU = DB::table('data_tu')->get();
        return view('TamplateTU',['data_tu' => $TU]);
    }

    public function indexperpustakaan(){
        return view('TamplateAdmin');
    }

    public function indexOB(){
        $OB = DB::table('data_OB')->get();
        return view('TamplateOB',['data_OB' => $OB]);
    }

    public function prosesinputOB(Request $request){
        $id     = $request->input('id');
        $nama   = $request->input('nama');
        $alamat = $request->input('alamat');
        
        return "Nama : ".$nama."<br> Alamat : ".$alamat;
    }
}
