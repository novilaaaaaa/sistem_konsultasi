@extends("layouts.blank")

@section("konten")
<table class="table">
    <a href="{{ route("buat_pasien") }}" class="btn btn-success">Add data</a>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">keterangan</th>
            <th scope="col">Create</th>
            <th scope="col">Updated</th>

        </tr>
    </thead>
    <tbody>

    <tbody>
        @foreach($data as $pasien)
        <tr>
            <th scope="row">{{$pasien->id}}</th>
            <td>{{$pasien->nama}}</td>
            <td>{{$pasien->keterangan}}</td>
            <td>{{$pasien->created_at}}</td>
            <td>{{$pasien->updated_at}}</td>
            <td>
                <a href="{{ route("ubah_pasien", ["id" => $pasien->id]) }}" class="btn btn-success">ubah</a>
                <a href="{{ route("tampil_pasien", ["id" => $pasien->id]) }}" class="btn btn-success">tampil</a>


                <form action="{{ route("hapus_pasien", ["id" => $pasien->id]) }}" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection