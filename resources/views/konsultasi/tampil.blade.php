@extends("layouts.blank")

@section("konten")

    <h1>{{ $konsultasi->nama }}</h1>
    <h1>{{ $konsultasi->tanggal }}</h1>
    <h1>{{ $konsultasi->isikonsultasi }}</h1>

    {{ $konsultasi->keterangan }}

@endsection