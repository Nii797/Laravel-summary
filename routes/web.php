<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Halo', function () {
    return ("Katakan Halo");
});

Route::get('Identitas', function () {
    return ("Nama saya soni");  
});

Route::get('/admin', function () {
    return view('TamplateAdmin',
        [   'Dashboard' => 'Ini Dashboard',
            'DataMahasiswa' => 'ini data mahasiswa',
            'DataDosen' => 'Ini data dosen',
            'DataTU' => 'Ini data TU'
        ]
    );
});

Route::get('/Dosen', function () {
    return view('TamplateDosen',
        [
            'nama'=>"Pak jack",
            'matkul'=>"Algoritma dan pemograman",
            'alamat'=>"Bandung Raya",
            'jurusan'=>"Teknik Informatika"
        ]
    );
});

Route::get('/Mahasiswa', function () {
    return view('TamplateMahasiswa',
        [
            'nama'=>"Soni Hidayatulloh",
            'kelas'=>"A3",
            'alamat'=>"Bandung Timur, Majalaya",
            'jurusan'=>"Teknik informatika"
        ]
    );
});

Route::get('/tatausaha', function () {
    return view('TamplateTU', 
        [
            'namatu' => "Herman",
            'bagian' => "Administrasi",
            'jabatan' => "Ketua Staff TU"
        ]
    );  
});