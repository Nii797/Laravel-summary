<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function index(){
        return view('TamplateAdmin',
    // data passing
            [ 
                'Dashboard' => 'Ini Dashboard',
                'DataMahasiswa' => 'ini data mahasiswa',
                'DataDosen' => 'Ini data dosen',
                'DataTU' => 'Ini data TU',
                'DataOB' => 'Ini data OB'
            ]
        );
    }

    public function indexdosen() {
        return view('TamplateDosen',
            [
                'nama' => "Yiyi Supendi",
                'matkul' => "Jaringan Komputer",
                'alamat' => "Cileunyi",
                'jurusan' => "Informatika"
            ]
        );
    }    

    public function indexdekan(){
        return view('TamplateDekan');
    }

    // masih percobaan dan belum bisa untuk menampilkan data di satu halaman dekan
    public function prosesinputdekan(Request $request){
        $nama = $request->input('nama');
        $jabatan = $request->input('jabatan');
        $dekanjurusan = $request->input('dekanjurusan');
        $alamat = $request->input('alamat');

        return view('TamplateDekan', 
            [
                'Nama' => $nama,
                'jabatan' => $jabatan,
                'dekanjurusan' => $dekanjurusan,
                'slamat' => $alamat
            ]
        );
    }

    public function prosesinputdosen(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        
        return "Nama : ".$nama.", Alamat : ".$alamat; 
    }

    public function indexmahasiswa() {
        return view('TamplateMahasiswa',
            [
                'nama' => "Soni Hidayatulloh",
                'kelas' => "A3",
                'alamat' => "Bandung Timur Majalaya city",
                'jurusan' => "Teknik Informatika"
            ]
        );
    }

    public function prosesinputmhs(Request $request){
        $nama    = $request->input('nama');
        $kelas   = $request->input('kelas');
        $alamat  = $request->input('alamat');
        $jurusan = $request->input('jurusan');

        return "Nama : ".$nama.", Kelas : ".$kelas." Alamat : ".$alamat.", Jurusan : ".$jurusan;
    }

    public function indexTU(){
        return view('TamplateTU',
            [
                'namatu' => "Herman",
                'bagian' => "Tata usaha administrasi",
                'jabatan' => "Ketua Tata usaha"
            ]
        );
    }


    public function indexOB(){
        return view('TamplateOB', 
            [
                'id' => "43243",
                'nama' => "Solihin Wayudin",
                'alamat' => "Bandung Raya"
            ]
        );
    }

    public function prosesinputOB(Request $request){
        $id     = $request->input('id');
        $nama   = $request->input('nama');
        $alamat = $request->input('alamat');
        
        return "Nama : ".$nama."<br> Alamat : ".$alamat;
    }
}
