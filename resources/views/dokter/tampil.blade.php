@extends("blank")

@section("konten")

    <h1>{{ $dokter->nama }}</h1>
    <h1>{{ $dokter->alamat }}</h1>
    <h1>{{ $dokter->kelamin }}</h1>
    <h1>{{ $dokter->ttl }}</h1>
    <h1>{{ $dokter->umur }}</h1>

    {{ $dokter->keterangan }}

@endsection