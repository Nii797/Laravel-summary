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

    public function tambahdekan(Request $request){
        // Insert data ke table pegawai
        DB::table('data_dekan')->insert([
            'dekan_id' => $request->dekanid,
            'dekan_nama' => $request->namadekan,
            'dekan_jabatan' => $request->jabatan,
            'dekan_jurusan' => $request->dekanjurusan,
            'dekan_umur' => $request->umur,
            'dekan_alamat' => $request->alamat
        ]); 

        // alihkan halaman ke halaman dekan
        return redirect('/dekan');
    }    

    public function indexdekan(){
        // mengambil data dari table pegawai
        $dekan = DB::table('data_dekan')->get();

        // mengirim data pegawai ke view TamplateDekan
        return view('TamplateDekan',['data_dekan' => $dekan]);
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
