<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{
    public function tesnamaurl($tesnamaurl){
        return $tesnamaurl;
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

    public function prosesdosen(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return $nama; 
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

    public function indexTU() {
        return view('TamplateTU',
            [
                'namatu' => "Herman",
                'bagian' => "Tata usaha administrasi",
                'jabatan' => "Ketua Tata usaha"
            ]
        );
    }

    public function indexOB() {
        return view('TamplateOB', 
            [
                'id' => "43243",
                'nama' => "Solihin Wayudin",
                'alamat' => "Bandung Raya"
            ]
        );
    }
}
