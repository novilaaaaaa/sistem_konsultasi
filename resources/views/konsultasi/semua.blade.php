@extends("layouts.blank")

@section("konten")
<table class="table">
    <a href="{{ route("buat_konsultasi") }}" class="btn btn-success">Add data</a>
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal</th>
            <th scope="col">IsiKonsultasi</th>
           
        </tr>
    </thead>
    <tbody>


    <tbody>
        @foreach($data as $konsultasi)
        <tr>
            <th scope="row">{{$konsultasi->nama}}</th>
            <td>{{$konsultasi->tanggal}}</td>
            <td>{{$konsultasi->isikonsultasi}}</td>
            <td>
                <a href="{{ route("ubah_konsultasi", ["id" => $konsultasi->id]) }}" class="btn btn-success">ubah</a>
                <a href="{{ route("tampil_konsultasi", ["id" => $konsultasi->id]) }}" class="btn btn-success">tampil</a>


                <form action="{{ route("hapus_konsultasi", ["id" => $konsultasi->id]) }}" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection