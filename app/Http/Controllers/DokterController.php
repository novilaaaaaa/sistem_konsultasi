<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function buat()
    {
        return view("dokter.form-input");
    }

    public function simpan(Request $request)
    {
        $dokter = new Dokter();
        $dokter->nama = $request->get("nama");
        $dokter->ttl = $request->get("ttl");
        $dokter->kelamin = $request->get("kelamin");
        $dokter->umur = $request->get("umur");
        $dokter->alamat = $request->get("alamat");

        $dokter->save();

        return redirect(route("tampil_dokter", ['id' => $dokter->id]));
    }

    public function tampil($id)
    {
        $pasien = dokter::find($id);

        return view("dokter.tampil")->with("dokter", $pasien);
    }

    public function semua()
    {
        $data = dokter::all();
        return view("dokter.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("dokter.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $dokter = dokter::find($id);
        $dokter->nama = $request->get("nama");
        $dokter->ttl = $request->get("ttl");
        $dokter->kelamin = $request->get("kelamin");
        $dokter->umur = $request->get("umur");
        $dokter->alamat = $request->get("alamat");
        $dokter->save();

        return redirect(route("tampil_dokter", ['id' => $dokter->id]));
    }

    public function hapus($id)
    {
        Dokter::destroy($id);
        return redirect(route('semua_dokter'));
    }
}
