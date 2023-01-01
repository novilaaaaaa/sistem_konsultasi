@extends("layouts.blank")

@section("konten")

<form action="{{ route("simpan_konsultasi") }}" method="post">
    @csrf

    Nama : <input type="text" name="nama"> <br>
    Tanggal : <input type="date" name="tanggal"> <br>
    Isi Konsultasi : <textarea name="isi konsultasi" id="" cols="20" rows="10"></textarea> <br>
    Kategori Konsultasi :
    <select name="id_kategori">
        @foreach($kategori as $value)
        <option value="{{$value->id}}">{{$value->nama}}</option>
        @endforeach
    </select>

    <button type="submit">Simpan</button>
</form>


@endsection