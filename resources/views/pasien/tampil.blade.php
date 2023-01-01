@extends("layouts.blank")

@section("konten")

    <h1>{{ $pasien->nama }}</h1>
    <h1>{{ $pasien->alamat }}</h1>
    <h1>{{ $pasien->kelamin }}</h1>
    <h1>{{ $pasien->ttl }}</h1>
    <h1>{{ $pasien->umur }}</h1>

    {{ $pasien->keterangan }}

@endsection