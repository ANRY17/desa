<?php

use Illuminate\Support\Facades\Route;

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

// Start Halaman Utama

Route::get('/', function () {
    return view('pages/home', [
        'title' => 'home'
    ]);
});

Route::get('/berita', function () {
    return view('pages/berita');
});

Route::get('/sejarah', function () {
    return view('pages/profil/sejarah', [
        'title' => 'sejarah'
    ]);
});

Route::get('/potensi-wisata', function () {
    return view('pages/potensiWisata', [
        'title' => 'potensi-wisata'
    ]);
});

Route::get('/kontak', function () {
    return view('pages/kontak', [
        'title' => 'kontak'
    ]);
});

// End Halaman Utama

// Start Halaman Profile

Route::get('/visi-misi', function () {
    return view('pages/profil/visiMisi', [
        'title' => 'VisiMisi'
    ]);
});

Route::get('/struktur', function () {
    return view('pages/profil/struktur', [
        'title' => 'struktur'
    ]);
});

Route::get('/demografi', function () {
    return view('pages/profil/demografi', [
        'title' => 'demografi'
    ]);
});

Route::get('/peta', function () {
    return view('pages/profil/peta', [
        'title' => 'peta'
    ]);
});

// End Halaman Profile

// Start Halaman Layanan

Route::get('/surat-keterangan-umum', function () {
    return view('pages/layanan/suratKeteranganUmum', [
        'title' => 'surat-keterangan-umum'
    ]);
});

Route::get('/surat-kelahiran', function () {
    return view('pages/layanan/suratKelahiran', [
        'title' => 'surat-kelahiran'
    ]);
});

Route::get('/surat-nikah', function () {
    return view('pages/layanan/suratNikah', [
        'title' => 'surat-nikah'
    ]);
});

Route::get('/surat-ijin-luar-negri', function () {
    return view('pages/layanan/suratIjinLuarNegri', [
        'title' => 'surat-ijin-luar-negri'
    ]);
});

Route::get('/surat-pindah-tempat', function () {
    return view('pages/layanan/suratPindahTempat', [
        'title' => 'surat-pindah-tempat'
    ]);
});

Route::get('/surat-kematian', function () {
    return view('pages/layanan/suratKematian', [
        'title' => 'surat-kematian'
    ]);
});

Route::get('/boro-nikah', function () {
    return view('pages/layanan/boroNikah', [
        'title' => 'boro-nikah'
    ]);
});

Route::get('/ijin-usaha', function () {
    return view('pages/layanan/ijinUsaha', [
        'title' => 'boro-usaha'
    ]);
});

Route::get('/skck', function () {
    return view('pages/layanan/skck', [
        'title' => 'skck'
    ]);
});

Route::get('/bri', function () {
    return view('pages/layanan/bri', [
        'title' => 'bri'
    ]);
});

// End Halaman Layanan
