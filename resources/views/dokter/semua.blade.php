@extends("layouts.blank")

@section("konten")

<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
    <a href="{{ route("buat_dokter") }}" class="btn btn-success">Add data</a>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kelamin</th>
            <th scope="col">TTL</th>
            <th scope="col">Umur</th>
            <th scope="col">Action</th>
           

        </tr>
    </thead>
    <tbody>

    <tbody>
        @foreach($data as $dokter)
        <tr>
            <th scope="row">{{$dokter->id}}</th>
            <th>{{$dokter->nama}}</th>
            <td>{{$dokter->alamat}}</td>
            <td>{{$dokter->kelamin}}</td>
            <td>{{$dokter->ttl}}</td>
            <td>{{$dokter->umur}}</td>
            <td>
                <a href="{{ route("ubah_dokter", ["id" => $dokter->id]) }}" class="btn btn-success">ubah</a>
                <a href="{{ route("tampil_dokter", ["id" => $dokter->id]) }}" class="btn btn-success">tampil</a>


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
