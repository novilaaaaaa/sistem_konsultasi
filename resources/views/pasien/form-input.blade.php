@extends("blank")

@section("konten")

<form action="{{ route("simpan_pasien") }}" method="post">
    @csrf

    Nama            : <input type="text" name="nama"> <br>
    Alamat          : <textarea name="alamat" id="" cols="20" rows="10"></textarea> <br>
    Kelamin         :
    <input type="radio" name="kelamin" value="pria"> Pria
    <input type="radio" name="kelamin" value="wanita"> Wanita
    <br>
    TTL             : <input type="date" name="ttl"> <br>
    Umur            : <input type="text" name="umur"> <br>



    <button type="submit">Simpan</button>
</form>


@endsection