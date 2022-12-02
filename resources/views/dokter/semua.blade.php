@extends("blank")

@section("konten")
<table class="table">
    <a href="{{ route("buat_dokter") }}">Add data</a>
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kelamin</th>
            <th scope="col">TTL</th>
            <th scope="col">Umur</th>
           

        </tr>
    </thead>
    <tbody>

    <h1>Semua Data</h1>

    <tbody>
        @foreach($data as $dokter)
        <tr>
            <th scope="row">{{$dokter->nama}}</th>
            <td>{{$dokter->alamat}}</td>
            <td>{{$dokter->kelamin}}</td>
            <td>{{$dokter->ttl}}</td>
            <td>{{$dokter->umur}}</td>
            <td>
                <a href="{{ route("user_edit", ["id" => $dokter->id]) }}">edit</a>
                <a href="{{ route("user_show", ["id" => $dokter->id]) }}">show</a>


                <form action="{{ route("user_hapus", ["id" => $dokter->id]) }}" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection