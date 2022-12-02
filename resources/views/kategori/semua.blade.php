@extends("blank")

@section("konten")
    <table class="table">
        <a href="{{ route("buat_kategori") }}">Add data</a>
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
            @foreach($data as $kategori)
            <tr>
                <th scope="row">{{$kategori->id}}</th>
                <td>{{$kategori->nama}}</td>
                <td>{{$kategori->keterangan}}</td>
                <td>{{$kategori->created_at}}</td>
                <td>{{$kategori->updated_at}}</td>
                <td>
                    <a href="{{ route("user_edit", ["id" => $kategori->id]) }}">edit</a>
                    <a href="{{ route("user_show", ["id" => $kategori->id]) }}">show</a>


                    <form action="{{ route("user_hapus", ["id" => $kategori->id]) }}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </table>
@endsection
