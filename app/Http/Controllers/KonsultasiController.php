<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use App\Models\Konsultasi;

class KonsultasiController extends Controller
{
    public function buat()
    {
        $kategori = kategori::all();
        return view("Konsultasi.form-input")->with('kategori', $kategori);
    }

    public function simpan(Request $request)
    {
        $Konsultasi = new Konsultasi();
        $Konsultasi->nama = $request->get("nama");
        $Konsultasi->tanggal = $request->get("tanggal");
        $Konsultasi->isikonsultasi = $request->get("isi_konsultasi");
        $Konsultasi->id_kategori = $request->get("id_kategori");
        $Konsultasi->save();

        return redirect(route("tampil_konsultasi"));
    }

    public function tampil($id)
    {
        $pasien = Konsultasi::find($id);

        return view("Konsultasi.tampil")->with("konsultasi", $pasien);
    }

    public function semua()
    {
        $data = Konsultasi::all();
        return view("Konsultasi.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("Konsultasi.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $Konsultasi = Konsultasi::find($id);
        $Konsultasi->nama = $request->get("nama");
        $Konsultasi->tanggal = $request->get("tanggal");
        $Konsultasi->isi_konsultasi = $request->get("isi_konsultasi");
        $Konsultasi->save();

        return redirect(route("tampil_Konsultasi", ['id' => $Konsultasi->id]));
    }

    public function hapus($id)
    {
        Konsultasi::destroy($id);
        return redirect(route("semua_konsultasi"));
    }
}
