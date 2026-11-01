
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Kajian;
use App\Http\Controllers\Admin\KajianController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Models\Artikel;

Route::get('/', function () {
    return view('linktree');
})->name('home');

Route::get('/reservasi', function () {
    return view('reservasi');
})->name('reservasi');

Route::get('/jadwal-kajian', function () {
    $kajians = Kajian::orderBy('tanggal')
        ->orderBy('waktu')
        ->get();

    return view('jadwal-kajian', compact('kajians'));
})->name('jadwal.kajian');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('kajian', KajianController::class);
    Route::resource('artikel', ArtikelController::class);
});

Route::get('/infak-donasi', function () {
    return view('infak-donasi');
})->name('infak.donasi');

Route::get('/website-resmi', function () {
    $kajians = Kajian::orderBy('tanggal', 'desc')
        ->orderBy('waktu')
        ->take(4)
        ->get();

    return view('website-resmi', compact('kajians'));
})->name('website');

Route::get('/website-resmi', function () {
    $kajians = Kajian::orderBy('tanggal', 'desc')
        ->orderBy('waktu')
        ->take(4)
        ->get();

    $artikels = \App\Models\Artikel::where('status', 'published')
        ->latest()
        ->get();

    return view('website-resmi', compact('kajians', 'artikels'));
})->name('website');

Route::get('/artikel/{slug}', function ($slug) {
    $artikel = \App\Models\Artikel::where('slug', $slug)
        ->where('status', 'published')
        ->firstOrFail();

    $artikelLainnya = \App\Models\Artikel::where('status', 'published')
        ->where('id', '!=', $artikel->id)
        ->latest()
        ->take(3)
        ->get();

    return view('artikel-detail', compact('artikel', 'artikelLainnya'));
})->name('artikel.show');

Route::view('/kantin', 'kantin')->name('kantin');

Route::view('/kegiatan-keislaman', 'kegiatan-keislaman')
    ->name('kegiatan.keislaman');
Route::view('/profil-mdt-mbc', 'profil-mdt-mbc')
    ->name('profil.mdt');

Route::view('/profil-tk-smb', 'profil-tk-smb')
    ->name('profil.tk');

