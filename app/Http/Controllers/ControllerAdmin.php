<?php

// ================== Pagination ==================


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

// ============ Fungsi Admin ============

    public function indexberandaadmin()
    {
        return view('TamplateAdminBeranda');
    }

// ============ Ekhir Fungsi Admin ============



// ============ Fungsi Dekan ============

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

    // method untuk edit data dekan
    public function editdekan($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $dekan = DB::table('data_dekan')->where('dekan_id',$id)->get();
        // passing data pegawai yang didapat ke view 
        return view('TamplateDekanEdit',['data_dekan' => $dekan]);
    }

    public function updatedekan(Request $request){
        DB::table('data_dekan')->where('dekan_id',$request->dekanid)->update([
            'dekan_nama' => $request->namadekan,
            'dekan_jabatan' => $request->jabatan,
            'dekan_jurusan' => $request->dekanjurusan,
            'dekan_umur' => $request->umur,
            'dekan_alamat' => $request->alamat    
        ]);

        return redirect('/dekan');
    }

    public function hapusdekan($id){
        DB::table('data_dekan')->where('dekan_id',$id)->delete();
        return redirect('/dekan');
    }

    public function indexdekan(){
        // mengambil data dari table pegawai
        $dekan = DB::table('data_dekan')->paginate(10);

        // mengirim data pegawai ke view TamplateDekan
        return view('TamplateDekan',['data_dekan' => $dekan]);
    }

// ============ Akhir fungsi Dekan ============    



// ============ Fungsi Dosen ============

    public function tambahdosen(Request $request){
        DB::table('data_dosen')->insert([
            'dosen_id'=> $request->iddosen,
            'dosen_nama'=> $request->namadosen,
            'dosen_alamat'=> $request->alamatdosen,
            'dosen_jurusan'=> $request->jurusandosen
        ]);

        return redirect('/dosen');
    }

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

    public function editdosen($id){
        $dataeditdekan = DB::table('data_dosen')->where('dosen_id',$id)->get();
        return view('TamplateDosenEdit',['data_dosen' => $dataeditdekan]);
    }

    public function updatedosen(Request $request){
        DB::table('data_dosen')->where('dosen_id',$request->iddosen)->update([
            'dosen_nama' => $request->namadosen,
            'dosen_alamat' => $request->alamatdosen,
            'dosen_jurusan' => $request->jurusandosen
        ]);

        return redirect('/dosen');
    }

    public function hapusdosen($id){
        DB::table('data_dosen')->where('dosen_id')->delete();
        return redirect('/mahasiswa');
    }

    public function indexdosen(){
        $dosen = DB::table('data_dosen')->paginate(10);
        return view('TamplateDosen',['data_dosen' => $dosen]);
    }

// ============ Akhir Fungsi Dosen ============



// ============ Fungsi Mahasiswa ============

    public function editmahasiswa($id){
        $dataeditmahasiswa = DB::table('data_mahasiswa')->where('mahasiswa_id',$id)->get();
        return view('TamplateMahasiswaEdit',['data_mahasiswa' => $dataeditmahasiswa]);
    }

    public function updatemahasiswa(Request $request){
        DB::table('data_mahasiswa')->where('mahasiswa_id',$request->idmahasiswa)->update([
            'mahasiswa_nama' => $request->namamahasiswa,
            'mahasiswa_kelas' => $request->kelasmahasiswa,
            'mahasiswa_alamat' => $request->alamatmahasiswa,
            'mahasiswa_jurusan' => $request->jurusanmahasiswa
        ]);

        return redirect('/mahasiswa');
    }

    public function indexmahasiswa(){
        $mahasiswa = DB::table('data_mahasiswa')->paginate(3);
        return view('TamplateMahasiswa',['data_mahasiswa' => $mahasiswa]);
    }

// ============ Akhir Fungsi Mahasiswa ============    



// ============ Fungsi TU ============

    public function tambahTU(Request $request){
        DB::table('data_tu')->insert([
            'TU_id' => $request->idtu,
            'TU_nama' => $request->namatu,
            'TU_bagian' => $request->bagiantu,
            'TU_jabatan' => $request->jabatantu
        ]);

        return redirect('/tatausaha');
    }

    public function edittu($id){
        $datatu = DB::table('data_tu')->where('TU_id',$id)->get();
        return view('TamplateTUEdit',['data_tu' => $datatu]);
    }

    public function updatetu(Request $request){
        DB::table('data_tu')->where('TU_id',$request->idtu)->update([
            'TU_nama' => $request->namatu,
            'TU_bagian' => $request->bagiantu,
            'TU_jabatan' => $request->jabatantu
        ]);

        return redirect('/tatausaha');
    }

    public function indexTU(){
        $datatu = DB::table('data_tu')->paginate(3);
        return view('TamplateTU',['data_tu' => $datatu]);
    }

// ============ Akhir Fungsi TU ============    



// ============ Fungsi Perpustakaan ============

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

    public function editperpus($id){
        $dataperpus = DB::table('data_perpustakaan')->where('nomor_buku',$id)->get();
        return view('TamplatePerpustakaanEdit',['data_perpustakaan'=>$dataperpus]);
    }

    public function updateperpus(Request $request){
        DB::table('data_perpustakaan')->where('nomor_buku', $request->nomorbuku)->update([
            'judul_buku' => $request->judulbuku,
            'npm_peminjam' => $request->npmpeminjam,
            'nama_peminjam' => $request->namapeminjam,
            'tgl_pinjam' => $request->tglpinjam,
            'tgl_kembali' => $request->tglkembali
        ]);

        return redirect('/perpustakaan');
    }

    public function indexperpus(){
        $dataperpus = DB::table('data_perpustakaan')->paginate(5);        
        return view('TamplatePerpustakaan',['data_perpustakaan' => $dataperpus]);
    }

// ============ Akhir Fungsi Perpustakaan ============



// ============ Fungsi OB ============

    public function tambahOB(Request $request){
        DB::table('data_ob')->insert([
            'OB_ID' => $request->id,
            'OB_nama' => $request->nama,
            'OB_alamat' => $request->alamat,
            'OB_bagiantempat' => $request->bagiantempat
        ]);

        return redirect('/officeboy');
    }

    public function editOB($id){
        $dataob = DB::table('data_ob')->where('OB_ID',$id)->get();
        return view('TamplateOBEdit',['data_ob'=>$dataob]);
    }

    public function updateOB(Request $request){
        DB::table('data_ob')->where('OB_ID', $request->idob)->update([
            'OB_nama' => $request->namaob,
            'OB_alamat' => $request->alamatob,
            'OB_bagiantempat' => $request->bagiantempatob
        ]);

        return redirect('/officeboy');
    }

    public function indexOB(){
        $dataofficeboy = DB::table('data_ob')->get();
        return view('TamplateOB',['data_ob' => $dataofficeboy]);
    }
}

// ============ Akhir Fungsi OB ============



