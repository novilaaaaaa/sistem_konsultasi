<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
use PharIo\Manifest\Url;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\DokterController;


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



Route::get("hii/panggilan/{name}", [TestingController::class, "hii"])->name("hii");


Route::get("/hii/{nama}",)->name("hii");
Route::get("/spek/{nama}", function ($nama) {
    return view("spek")
        ->with("nama", $nama)
        ->with("mk", "Web Lanjut")
        ->with("waktu", date("H:m:s"))
        ->with("kampus", "Universitas Muhammadiyah Kalimantan Timur");
})->name("spek");

Route::get("/about.me", function () {
    return view("about.me");
})->name("about");

Route::get("/pmm", function () {
    return view("pmm");
})->name("pmm");

Route::get("/novil", function () {
    return view("novil");
})->name("novil");

Route::get("/boba", function () {
    return view("boba");
})->name("boba");

Route::get("/pwl", function () {
    return view("pwl");
})->name("pwl");

Route::get("/laela", function () {
    return view("laela");
})->name("laela");

Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");

Route::middleware("auth")->group(function() {
    Route::get('/', function () {
        return view('layouts.blank');
    });

    Route::get("/tampil-semua-user", [UserController::class, "tampil"])->name("user_all");
    Route::get("/input-user", [UserController::class, "forminput"])->name("user_input");
    Route::post("/simpan-user", [UserController::class, "simpan"])->name("user_simpan");
    
    Route::get("/edit-user/{id}", [UserController::class, "formEdit"])->name("user_edit");
    Route::put("/update-user/{id}", [UserController::class, "update"])->name("user_update");
    
    Route::delete("/hapus-user/{id}", [UserController::class, "hapus"])->name("user_hapus");
    Route::get("/tampil-user/{id}", [UserController::class, "show"])->name("user_show");
    
    
    
    Route::get("/logout", [SecurityController::class, "logout"])->name("logout");

Route::get("kategori/buat", [KategoriController::class, 'buat'])->name("buat_kategori");
Route::post("kategori/simpan", [KategoriController::class, 'simpan'])->name("simpan_kategori");
Route::get("kategori/tampil/{id}", [KategoriController::class, 'tampil'])->name("tampil_kategori");
Route::get("kategori/semua", [KategoriController::class, 'semua'])->name("semua_kategori");
Route::get("kategori/ubah/{id}", [KategoriController::class, 'ubah'])->name("ubah_kategori");
Route::put("kategori/update/{id}", [KategoriController::class, 'update'])->name("update_kategori");
Route::delete("kategori/hapus/{id}", [KategoriController::class, 'hapus'])->name("hapus_kategori");

Route::get("pasien/buat", [PasienController::class, 'buat'])->name("buat_pasien");
Route::post("pasien/simpan", [PasienController::class, 'simpan'])->name("simpan_pasien");
Route::get("pasien/tampil/{id}", [PasienController::class, 'tampil'])->name("tampil_pasien");
Route::get("pasien/semua", [PasienController::class, 'semua'])->name("semua_pasien");
Route::get("pasien/ubah/{id}", [PasienController::class, 'ubah'])->name("ubah_pasien");
Route::put("pasien/update/{id}", [PasienController::class, 'update'])->name("update_pasien");
Route::delete("pasien/hapus/{id}", [PasienController::class, 'hapus'])->name("hapus_pasien");

Route::get("konsultasi/buat", [KonsultasiController::class, 'buat'])->name("buat_konsultasi");
Route::post("konsultasi/simpan", [KonsultasiController::class, 'simpan'])->name("simpan_konsultasi");
Route::get("konsultasi/tampil/{id}", [KonsultasiController::class, 'tampil'])->name("tampil_konsultasi");
Route::get("konsultasi/semua", [KonsultasiController::class, 'semua'])->name("semua_konsultasi");
Route::get("konsultasi/ubah/{id}", [KonsultasiController::class, 'ubah'])->name("ubah_konsultasi");
Route::put("konsultasi/update/{id}", [KonsultasiController::class, 'update'])->name("update_konsultasi");
Route::delete("konsultasi/hapus/{id}", [KonsultasiController::class, 'hapus'])->name("hapus_konsultasi");

Route::get("dokter/buat", [DokterController::class, 'buat'])->name("buat_dokter");
Route::post("dokter/simpan", [DokterController::class, 'simpan'])->name("simpan_dokter");
Route::get("dokter/tampil/{id}", [DokterController::class, 'tampil'])->name("tampil_dokter");
Route::get("dokter/semua", [DokterController::class, 'semua'])->name("semua_dokter");
Route::get("dokter/ubah/{id}", [DokterController::class, 'ubah'])->name("ubah_dokter");
Route::put("dokter/update/{id}", [DokterController::class, 'update'])->name("update_dokter");
Route::delete("dokter/hapus/{id}", [DokterController::class, 'hapus'])->name("hapus_dokter");

});

