<?php
// CRUD ADD + / TAMBAH DATA

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


// ====================== tambah dekan ======================    
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



// ====================== tambah dosen ======================

    public function tambahdosen(Request $request){
        DB::table('data_dosen')->insert([
            'dosen_id'=> $request->iddosen,
            'dosen_nama'=> $request->namadosen,
            'dosen_alamat'=> $request->alamatdosen,
            'dosen_jurusan'=> $request->jurusandosen
        ]);

        return redirect('/dosen');
    }

    public function indexdosen(){
        $dosen = DB::table('data_dosen')->get();
        return view('TamplateDosen',['data_dosen' => $dosen]);
    }



// ====================== tambah mahasiswa ======================    
    public function tambahmahasiswa(Request $request){
        DB::table('data_mahasiswa')->insert([
            'mahasiswa_id' => $request->idmahasiswa,
            'mahasiswa_nama' => $request->namamahasiswa,
            'mahasiswa_kelas' => $request->kelasmahasiswa,
            'mahasiswa_alamat' => $request->alamatmahasiswa,
            'mahasiswa_jurusan' => $request->jurusanmahasiswa
        ]);

        return redirect('/mahasiswa');
    }

    public function indexmahasiswa(){
        $mahasiswa = DB::table('data_mahasiswa')->get();
        return view('TamplateMahasiswa',['data_mahasiswa' => $mahasiswa]);
    }



// ====================== tambah tu ======================        
    public function tambahTU(Request $request){
        DB::table('data_tu')->insert([
            'TU_id' => $request->idtu,
            'TU_nama' => $request->namatu,
            'TU_bagian' => $request->bagiantu,
            'TU_jabatan' => $request->jabatantu
        ]);

        return redirect('/tatausaha');
    }

    public function indexTU(){
        $datatu = DB::table('data_tu')->get();
        return view('TamplateTU',['data_tu' => $datatu]);
    }



// ====================== tambah perpustakaan ======================        
    public function tambahperpus(Request $request){
        DB::table('data_perpustakaan')->insert([
            'nomor_buku' => $request->nomorbuku,
            'judul_buku' => $request->judulbuku,
            'npm_peminjam' => $request->npmpeminjam,
            'nama_peminjam' => $request->namapeminjam,
            'tgl_pinjam' => $request->tanggalpinjam,
            'tgl_kembali' => $request->tanggalkembali
        ]);

        return redirect('/perpustakaan');
    }

    public function indexperpus(){
        $dataperpus = DB::table('data_perpustakaan')->get();        
        return view('TamplatePerpustakaan',['data_perpustakaan' => $dataperpus]);
    }



// ====================== tambah bo ======================        
    public function tambahOB(Request $request){
        DB::table('data_ob')->insert([
            'OB_ID' => $request->id,
            'OB_nama' => $request->nama,
            'OB_alamat' => $request->alamat,
            'OB_bagiantempat' => $request->bagiantempat
        ]);

        return redirect('/officeboy');
    }

    public function indexOB(){
        $dataofficeboy = DB::table('data_ob')->get();
        return view('TamplateOB',['data_ob' => $dataofficeboy]);
    }
}




