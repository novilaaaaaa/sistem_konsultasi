@extends("blank")

@section("konten")

<form action="{{ route("update_konsultasi", ['id' => $id]) }}" method="post">
    @csrf
    @method("put")

    Nama            : <input type="text" name="nama"> <br>
    Tanggal         : <input type="date" name="tanggal"> <br>
    Isi Konsultasi  : <textarea name="isi konsultasi" id="" cols="30" rows="20"></textarea> <br>

    <button type="submit">Simpan</button>
</form>


@endsection