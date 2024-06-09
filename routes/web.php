<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(GeneralPage::class)->group(function () {
    // Awal Home
    Route::get('/', 'home');
    // Akhir Home

    // Awal User
    Route::get('/login-user', 'loginuser');
    Route::get('/daftar-user', 'daftaruser');
    Route::get('/profil-desa', 'profildesa');
    Route::get('/visi-misi', 'visimisi');
    Route::get('/sejarah', 'sejarah');
    Route::get('/layanan-verifikasi-dokumen', 'layananverifikasidokumen');
    Route::get('/layanan-verifikasi-sukses', 'layananverifikasisukses');
    Route::get('/layanan-verifikasi-gagal', 'layananverifikasigagal');
    Route::get('/layanan-pelaporan', 'layananpelaporan');
    Route::get('/layanan-form-pelaporan', 'layananformpelaporan');
    Route::get('/layanan-pengajuan-dokumen', 'layananpengajuandokumen');
    Route::get('/layanan-form-permohonan', 'layananformpermohonan');
    Route::get('/layanan-status-permohonan', 'layananstatuspermohonan');
    Route::get('/layanan-status-ditolak', 'layananstatusditolak');
    Route::get('/informasi-berita', 'informasiberita');
    Route::get('/informasi-detail-berita', 'informasidetailberita');
    Route::get('/informasi-pengumuman', 'informasipengumuman');
    Route::get('/galeri-foto-video', 'galerifotovideo');
    // Akhir User

    // Awal Admin
    Route::get('/login-admin', 'login');
    // Akhir Admin
});
