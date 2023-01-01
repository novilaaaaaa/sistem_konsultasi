@extends("layouts.blank")

@section("konten")
    <table class="table">
        <a href="{{ route("buat_kategori") }}" class="btn btn-success">Add data</a>
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
            @foreach($data as $kategori)
            <tr>
                <th scope="row">{{$kategori->id}}</th>
                <td>{{$kategori->nama}}</td>
                <td>{{$kategori->keterangan}}</td>
                <td>{{$kategori->created_at}}</td>
                <td>{{$kategori->updated_at}}</td>
                <td>
                    <a href="{{ route("ubah_kategori", ["id" => $kategori->id]) }}" class="btn btn-success">ubah</a>
                    <a href="{{ route("tampil_kategori", ["id" => $kategori->id]) }}" class="btn btn-success">tampil</a>


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
