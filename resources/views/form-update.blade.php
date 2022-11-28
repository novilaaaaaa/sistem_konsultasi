@extends("blank")

@section("konten")

@if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif

<form action="{{ route("user_update", ['id' => $id]) }}" method="post">
    @csrf
    @method("put")
    Nama : <input type="text" name="name"> <br>
    Email : <input type="text" name="email"> <br>
    Password : <input type="text" name="password"> <br>
    Level : <input type="text" name="level"> <br>

    <button type="submit">Simpan</button>

</form>
@endsection