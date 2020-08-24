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
Route::get('/tes/{tesnamaurl}', 'ControllerAdmin@tesnamaurl');

// menangkap data dari url parameter nama dari fungsi iniindex 
Route::get('/admintangkap/{nama}', 'ControllerAdmin@iniindex');

// Route::get('/admin', 'ControllerAdmin@indexadmin');

Route::get('/admin', 'ControllerAdmin@indexberandaadmin');

Route::get('/dekan', 'ControllerAdmin@indexdekan');
Route::post('/dekan', 'ControllerAdmin@prosesinputdekan');

Route::get('/dosen', 'ControllerAdmin@indexdosen');
Route::post('/dosen/prosesinputdosen', 'ControllerAdmin@prosesinputdosen');

Route::get('/mahasiswa', 'ControllerAdmin@indexmahasiswa');
Route::post('/mahasiswa/prosesinputmhs', 'ControllerAdmin@prosesinputmhs');

Route::get('/tatausaha', 'ControllerAdmin@indexTU');
Route::post('/tatausaha/proses', 'ControllerAdmin@prosesinputTU');

Route::get('/officeboy', 'ControllerAdmin@indexOB');
Route::post('/officeboy', 'ControllerAdmin@prosesinputOB');

