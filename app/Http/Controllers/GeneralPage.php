<?php

namespace App\Http\Controllers;

class GeneralPage extends Controller
{
    // Awal Home
    function home() {
        return view('/home');
    }
    // Akhir Home

    // Awal User
    function loginuser () {
        return view('pages/user/login');
    }
    function daftaruser () {
        return view('pages/user/daftar');
    }
    function profildesa () {
        return view('pages/user/profil-desa/profil-desa');
    }
    function visimisi () {
        return view('pages/user/profil-desa/visi-misi');
    }
    function sejarah () {
        return view('pages/user/profil-desa/sejarah');
    }
    function layananverifikasidokumen () {
        return view('pages/user/layanan/verifikasi-dokumen');
    }
    function layananverifikasisukses () {
        return view('pages/user/layanan/verifikasi-sukses');
    }
    function layananverifikasigagal () {
        return view('pages/user/layanan/verifikasi-gagal');
    }
    function layananpelaporan () {
        return view('pages/user/layanan/pelaporan');
    }
    function layananformpelaporan () {
        return view('pages/user/layanan/form-pelaporan');
    }
    function layananpengajuandokumen () {
        return view('pages/user/layanan/pengajuan-dokumen');
    }
    function layananformpermohonan () {
        return view('pages/user/layanan/form-permohonan');
    }
    function layananstatusditolak () {
        return view('pages/user/layanan/status-ditolak');
    }
    function informasiberita () {
        return view('pages/user/informasi/berita');
    }
    function informasidetailberita () {
        return view('pages/user/informasi/detail-berita');
    }
    function informasipengumuman () {
        return view('pages/user/informasi/pengumuman');
    }
    function galerifotovideo () {
        return view('pages/user/galeri/foto-video');
    }

    // Akhur User

    // Awal Admin
    function dashboard () {
        return view('pages/admin/dashboard');
    }
    // Akhir Admin
}
