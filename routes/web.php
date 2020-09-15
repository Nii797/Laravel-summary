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

// Route::get('/admin', function () {
//     return view('TamplateAdmin',
//         [   'Dashboard' => 'Ini Dashboard',
//             'DataMahasiswa' => 'ini data mahasiswa',
//             'DataDosen' => 'Ini data dosen',
//             'DataTU' => 'Ini data TU',
//             'DataOB' => 'Ini data OB'
//         ]
//     );
// });

// Catch data url (menangkap data url)
Route::get('/tes/{tesnamaurl}','ControllerAdmin@tesnamaurl');

// menangkap data dari url parameter nama dari fungsi iniindex 
Route::get('/admintangkap/{nama}','ControllerAdmin@iniindex');

// Route::get('/admin', 'ControllerAdmin@indexadmin');

Route::get('/admin','ControllerAdmin@indexberandaadmin');

Route::get('/dekan','ControllerAdmin@indexdekan');
Route::post('/dekan/tambahdekan','ControllerAdmin@tambahdekan');
Route::get('/dekan/edit/{id}','ControllerAdmin@editdekan');
Route::post('/dekan/update','ControllerAdmin@updatedekan');
Route::get('/dekan/hapus/{id}','ControllerAdmin@hapusdekan');

Route::get('/dosen', 'ControllerAdmin@indexdosen');
Route::post('/dosen/tambahdosen','ControllerAdmin@tambahdosen');
Route::get('/dosen/edit/{id}','ControllerAdmin@editdosen');
Route::post('/dosen/update','ControllerAdmin@updatedosen');
Route::get('/dosen/hapus/{id}','ControllerAdmin@hapusdekan');

Route::get('/mahasiswa','ControllerAdmin@indexmahasiswa');
Route::post('/mahasiswa/tambahmahasiswa','ControllerAdmin@tambahmahasiswa');
Route::get('/mahasiswa/edit/{id}','ControllerAdmin@editmahasiswa');
Route::post('/mahasiswa/update','COntrollerAdmin@updatemahasiswa');
Route::get('/mahasiswa/hapus/{id}','ControllerAdmin@hapusmahasiswa');

Route::get('/tatausaha','ControllerAdmin@indexTU');
Route::post('/tatausaha/tambah','ControllerAdmin@tambahTU');
Route::get('/tatausaha/edit/{id}','ControllerAdmin@edittu');
Route::post('/tatausaha/update','ControllerAdmin@updatetu');
Route::get('/tatausaha/hapus/{id}','ControllerAdmin@hapustu');

Route::get('/perpustakaan','ControllerAdmin@indexperpus');
Route::post('/perpustakaan/tambah','ControllerAdmin@tambahperpus');
Route::get('/perpustakaan/edit/{id}','ControllerAdmin@editperpus');
Route::post('/perpustakaan/update','ControllerAdmin@updateperpus');
Route::get('/perpustakaan/hapus/{id}','ControllerAdmin@hapusperpus');

Route::get('/officeboy','ControllerAdmin@indexOB');
Route::post('/officeboy/tambah','ControllerAdmin@tambahOB');
Route::get('/officeboy/edit{id}','ControllerAdmin@editOB');
Route::post('/officeboy/update','ControllerAdmin@updateOB');
Route::get('/officeboy/hapus','ControllerAdmin@hapusOB');