@extends("blank")

@section("konten")
<table class="table">
    <a href="{{ route("buat_pasien") }}">Add data</a>
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

    <h1>Semua Data</h1>

    <tbody>
        @foreach($data as $pasien)
        <tr>
            <th scope="row">{{$pasien->id}}</th>
            <td>{{$pasien->nama}}</td>
            <td>{{$pasien->keterangan}}</td>
            <td>{{$pasien->created_at}}</td>
            <td>{{$pasien->updated_at}}</td>
            <td>
                <a href="{{ route("user_edit", ["id" => $pasien->id]) }}">edit</a>
                <a href="{{ route("user_show", ["id" => $pasien->id]) }}">show</a>


                <form action="{{ route("user_hapus", ["id" => $pasien->id]) }}" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection