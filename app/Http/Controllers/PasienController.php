<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function buat()
    {
        return view("pasien.form-input");
    }

    public function simpan(Request $request)
    {
        $pasien = new Pasien();
        $pasien->nama = $request->get("nama");
        $pasien->alamat = $request->get("alamat");
        $pasien->kelamin = $request->get("kelamin");
        $pasien->ttl = $request->get("ttl");
        $pasien->umur = $request->get("umur");
        $pasien->save();

        return redirect(route("semua_pasien"));
    }

    public function tampil($id)
    {
        $pasien = pasien::find($id);

        return view("pasien.tampil")->with("pasien", $pasien);
    }

    public function semua()
    {
        $data = pasien::all();
        return view("pasien.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("pasien.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $pasien = pasien::find($id);
        $pasien->nama = $request->get("nama");
        $pasien->alamat = $request->get("alamat");
        $pasien->kelamin = $request->get("kelamin");
        $pasien->ttl = $request->get("ttl");
        $pasien->umur = $request->get("umur");
        $pasien->save();

        return redirect(route("tampil_pasien", ['id' => $pasien->id]));
    }

    public function hapus($id)
    {
        Pasien::destroy($id);
        return redirect(route("semua_pasien"));
    }
}
