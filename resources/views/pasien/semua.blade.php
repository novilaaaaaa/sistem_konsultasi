@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $pasien)
        Nama            : {{ $pasien->nama }} <br>
        Alamat          : {{ $pasien->alamat }} <br>
        Kelamin         : {{ $pasien->kelamin }} <br>
        TTL             : {{ $pasien->ttl }} <br>
        Umur            : {{ $pasien->umur }} <br>


        <a href="{{ route('ubah_pasien', ['id' => $pasien->id]) }}">Ubah</a>
        <a href="{{ route('tampil_pasien', ['id' => $pasien->id]) }}">Tampil</a>

        <form action="{{ route('hapus_pasien', ['id' => $pasien->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection