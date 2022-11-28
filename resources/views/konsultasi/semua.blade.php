@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $konsultasi)
        Nama                 : {{ $konsultasi->nama }} <br>
        Tanggal              : {{ $konsultasi->tanggal }} <br>
        Isi konsultasi       : {{ $konsultasi->isikonsultasi }} <br>


        <a href="{{ route('ubah_konsultasi', ['id' => $konsultasi->id]) }}">Ubah</a>
        <a href="{{ route('tampil_konsultasi', ['id' => $konsultasi->id]) }}">Tampil</a>

        <form action="{{ route('hapus_konsultasi', ['id' => $konsultasi->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection