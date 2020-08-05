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

Route::get('/tes', function () {
    return view('tes', ['Kontent'=>"Ini adalah Tes"]);
});

Route::get('/biodatamahasiswa', function () {
    return view('tes', 
        [   'nama'=>"Gundul",
            'kelas'=>"A3",
            'alamat'=>"Bandung",
            'jurusan'=>"jurusan"
        ]
    );
});

Route::get('/admintwd', function () {
    return view('TamplateAdmin',
        [   'Dashboard' => 'Ini Dashboard',
            'DataMahasiswa' => 'ini data mahasiswa',
            'DataDosen' => 'Ini data dosen'
        ]
    );
});

Route::get('/tatausaha', function () {
    return view('TU', 
        [
            'namatu' => "Herman",
            'bagian' => "Administrasi",
            'jabatan' => "Ketua Staff TU"
        ]
    );  
});

// Controller

Route::get('mahasiswa', 'MahasiswaController@index');
