@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $dokter)
        Nama            : {{ $dokter->nama }} <br>
        Alamat          : {{ $dokter->alamat }} <br>
        Kelamin         : {{ $dokter->kelamin }} <br>
        TTL             : {{ $dokter->ttl }} <br>
        Umur            : {{ $dokter->umur }} <br>


        <a href="{{ route('ubah_dokter', ['id' => $dokter->id]) }}">Ubah</a>
        <a href="{{ route('tampil_dokter', ['id' => $dokter->id]) }}">Tampil</a>

        <form action="{{ route('hapus_dokter', ['id' => $dokter->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection